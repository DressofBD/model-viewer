function getMarkerIcon(number) {
  // inline your SVG image with number variable
  var svg = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40"> <defs> <rect id="path-1" width="40" height="40"/> <mask id="mask-2" width="40" height="40" x="0" y="0" fill="white"> <use xlink:href="#path-1"/> </mask> </defs> <g id="Page-1" fill="none" fill-rule="evenodd"> <g id="Phone-Portrait---320" transform="translate(-209 -51)"> <g id="Group" transform="translate(209 51)"> <use id="Rectangle" fill="#FFEB3B" stroke="#F44336" stroke-width="4" mask="url(#mask-2)" xlink:href="#path-1"/> <text id="1" fill="#20539F" font-family="NunitoSans-ExtraBold, Nunito Sans" font-size="18" font-weight="600" letter-spacing=".104" text-anchor="middle" x="50%" y="28">' + number + '</text> </g> </g> </g> </svg>';
  // use SVG without base64 see: https://css-tricks.com/probably-dont-base64-svg/
  return 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(svg);
}

function infoCallback(markerIdent, marker) {
  return function() {
  	// this functionality filters the table. this is not a great user experience
    /*
    list_table.columns().search('');
    // search the origin column
    list_table.columns(5).search(markerIdent).draw();
    */
    // this functionality highlights matching rows
    list_table.columns().search('');
    list_table.rows().every(function(rowIdx, tableLoop, rowLoop) {
    	// 5 is the column with the origin idents
    	if (list_table.row(rowIdx).data()[5] == markerIdent) {
        jQuery(list_table.row(rowIdx).node()).css("background-color","#f67280");
        // col 9 is a sorting value, 1 or 0
        list_table.cell({row:rowIdx, column:9}).data(1);
    	} else {
        jQuery(list_table.row(rowIdx).node()).css("background-color","#ffffff");    		
        // col 9 is a sorting value, 1 or 0
        list_table.cell({row:rowIdx, column:9}).data(0);
    	}
    });
    list_table.order([[ 9, 'desc' ],[ 3, 'asc' ]]).draw();
  };
}

function flightPathCallback(route, flightPath) {
  return function() {
    list_table.columns().search('');
    list_table.rows().every(function(rowIdx, tableLoop, rowLoop) {
    	// 0 is the column with the route origin-dest
    	if (list_table.row(rowIdx).data()[0] == route) {
        jQuery(list_table.row(rowIdx).node()).css("background-color","#f67280");
        // col 9 is a sorting value, 1 or 0
        list_table.cell({row:rowIdx, column:9}).data(1);
    	} else {
        jQuery(list_table.row(rowIdx).node()).css("background-color","#ffffff");    		
        // col 9 is a sorting value, 1 or 0
        list_table.cell({row:rowIdx, column:9}).data(0);
    	}
    });
    list_table.order([[ 9, 'desc' ],[ 3, 'asc' ]]).draw();
  };
}

function gInitialize() {
  var myOptions = {
    center: new google.maps.LatLng(default_latitude,default_longitude),
    zoom: default_zoom,
    mapTypeId: google.maps.MapTypeId.HYBRID
  };
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

	geocoder = new google.maps.Geocoder();
   // add an icon for the passenger's home
    var address = "10554 Ohio Ave,Los Angeles,CA,90024";
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        home_address_marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          title: "Home (origin)",
          label: {
  	        color: "red",
  	        fontWeight: "bold",
  	        text: "Home (origin)"
  	      }
        });
    // add an icon for the destination facility
    var address = "725 Welch Rd, Palo Alto, CA 94304";
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        facility_marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
        bounds = new google.maps.LatLngBounds();
        bounds.extend(home_address_marker.getPosition());
        bounds.extend(facility_marker.getPosition());
        map.fitBounds(bounds);
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });

  // update the list of missions
  filter_db();
}

function hide_all_paths() {
  for (i = 0; i < flight_paths.length; i++) {
    flight_paths[i].setMap(null);
  }
  for (i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
}

function filter_db() {
	geocoder = new google.maps.Geocoder();
  // hide all the paths and markers
  hide_all_paths();

  // compose the filter object
  var filter_object_str = "";
  if (jQuery("#originDistance option:selected").val() != 9999) {
    filter_object_str+= "\"originDistance\":{\"lte\":" + jQuery("#originDistance option:selected").val() + "},";
  }
  if (jQuery("#destDistance option:selected").val() != 9999) {
    filter_object_str+= "\"destDistance\":{\"lte\":" + jQuery("#destDistance option:selected").val() + "},";
  }
  if (jQuery("#seatsAvailable option:selected").val() != "all") {
    filter_object_str+= "\"seatsAvailable\":{\"gte\":" + jQuery("#seatsAvailable option:selected").val() + "},";
  }
  // if there is only a start date or an end date, these can be additive, but if both are set, then they need to be entered as an array
  if (jQuery("#start_date").val() && jQuery("#end_date").val()) {
    var sd_obj = moment(jQuery("#start_date").val());
    var ed_obj = moment(jQuery("#end_date").val());
    filter_object_str+= "\"missionDate\":{\"gte\":" + sd_obj.format("X") + ",\"lte\":" + ed_obj.format("X") + "},";
  } else {
    if (jQuery("#start_date").val()) {
      var sd_obj = moment(jQuery("#start_date").val());
      filter_object_str+= "\"missionDate\":{\"gte\":" + sd_obj.format("X") + "},";
    }
    if (jQuery("#end_date").val()) {
      var ed_obj = moment(jQuery("#end_date").val());
      filter_object_str+= "\"missionDate\":{\"lte\":\"" + ed_obj.format("X") + "\"},";
    }
  }
  if (filter_object_str.substr(filter_object_str.length - 1) == ",") filter_object_str = filter_object_str.substring(0,filter_object_str.length-1);

  // this is useful for debugging, but not for presentation to the user
  jQuery("#filter").html(filter_object_str);

  if (filter_object_str == "") {
    filter_object = null;
  } else {
    var filter_object = jQuery.parseJSON("{" + filter_object_str + "}");
  }
    var counter = 0;
    var min_lat = 180;
    var min_lng = 0;
    var max_lat = 0;
    var max_lng = -180;

    //var mission_legs = new Array();
    //mission_legs.push({"originLat":"","originLng":"","destinationLat":"","destinationLng":""});
    //mission_legs.push({"originLat":,"originLng":,"destinationLat":"","destinationLng":"-122.30200195312"});
    
  mission_legs(filter_object).each(function(record, record_number){
    var faLatLong = new google.maps.LatLng(record.originLat, record.originLon);
    var taLatLong = new google.maps.LatLng(record.destinationLat, record.destinationLon);
    var flightPlanCoordinates = [
      faLatLong,
      taLatLong,
    ];

    if (record.originLat < min_lat) min_lat = record.originLat;
    if (record.originLat > max_lat) max_lat = record.originLat;
    if (record.destinationLat < min_lat) min_lat = record.destinationLat;
    if (record.destinationLat > max_lat) max_lat = record.destinationLat;

    if (record.originLon < min_lng) min_lng = record.originLon;
    if (record.originLon > max_lng) max_lng = record.originLon;
    if (record.destinationLon < min_lng) min_lng = record.destinationLon;
    if (record.destinationLon > max_lng) max_lng = record.destinationLon;

  	var faMarker = new google.maps.Marker({
      position: faLatLong,
      map: map,
      icon: destinationIcon,
      title: record.originID,
      label: record.originID
  	});
  	var taMarker = new google.maps.Marker({
      position: taLatLong,
      map: map,
			icon: destinationIcon,
      title: record.destinationID,
      label: record.destinationID
  	});
  	markers.push(faMarker);
  	markers.push(taMarker);

    var lineSymbol = {
      path: "M 4.7932777,4.7812376 C 4.7259064,4.8486085 4.7323964,4.9347702 4.9650313,5.4373336 C 4.9924894,5.4966515 5.1453716,5.7138571 5.1453716,5.7138571 C 5.1453723,5.7138561 5.0426847,5.8268489 5.0148394,5.8546943 C 4.9610053,5.9085284 4.9361984,6.0293335 4.958161,6.1243469 C 5.026297,6.4191302 5.8480608,7.5947712 6.3081405,8.0548517 C 6.593652,8.3403629 6.7408456,8.5354068 6.730653,8.6147666 C 6.7220521,8.6817367 6.6138788,8.9698607 6.4901987,9.2536889 C 6.2719706,9.7544933 6.1902268,9.8530093 3.7284084,12.592571 C 1.7788774,14.76205 1.1823532,15.462131 1.1469587,15.620578 C 1.0488216,16.059908 1.4289737,16.468046 2.4110617,16.977428 L 2.9177343,17.24021 C 2.9177343,17.24021 10.306553,11.950215 10.306553,11.950215 L 14.736066,15.314858 L 14.634732,15.495198 C 14.578751,15.594046 14.11587,16.171307 13.60593,16.778194 C 13.095992,17.385083 12.673006,17.939029 12.666441,18.009665 C 12.640049,18.293626 13.777085,19.186772 13.947719,19.016137 C 14.217037,18.74682 15.346696,17.884968 15.441971,17.875697 C 15.509995,17.869079 16.481025,17.128624 16.810843,16.798805 C 17.140662,16.468987 17.881117,15.497956 17.887735,15.429933 C 17.897006,15.334658 18.758859,14.204999 19.028176,13.93568 C 19.198811,13.765045 18.305664,12.62801 18.021702,12.654403 C 17.951067,12.660967 17.397123,13.083953 16.790233,13.593891 C 16.183346,14.103831 15.606085,14.566712 15.507236,14.622693 L 15.326897,14.724027 L 11.962253,10.294514 C 11.962253,10.294514 17.252249,2.9056938 17.25225,2.9056938 L 16.989466,2.3990218 C 16.480084,1.416933 16.071947,1.0367811 15.632617,1.1349189 C 15.474169,1.1703136 14.774089,1.7668355 12.60461,3.7163677 C 9.8650471,6.1781859 9.7665321,6.2599294 9.2657298,6.4781579 C 8.9819013,6.601838 8.6937782,6.7100098 8.6268071,6.7186131 C 8.5474478,6.7288044 8.352405,6.5816098 8.0668925,6.2960996 C 7.6068129,5.8360191 6.4311712,5.0142561 6.1363875,4.9461203 C 6.0413739,4.9241577 5.92057,4.9489642 5.8667352,5.0027982 C 5.8388891,5.0306446 5.7276147,5.1316136 5.7276147,5.1316136 C 5.7276147,5.1316136 5.5104099,4.9787304 5.4510923,4.9512732 C 4.9485278,4.7186391 4.8606505,4.7138647 4.7932777,4.7812376 z",
      scale: 2,
      anchor: new google.maps.Point(10, 0),
      fillOpacity: 1,
      fillColor: "yellow",
      strokeColor: "yellow"
    };

    var flightPath = new google.maps.Polyline({
      path: flightPlanCoordinates,
      strokeColor: "#FF0000",
      strokeOpacity: 1.0,
      strokeWeight: 2,
      icons: [{
        icon: lineSymbol,
        offset: '50%'
      }]
    });

    var flightPathRoute = record.originIdent + "-" + record.destinationIdent; 

		google.maps.event.addListener(faMarker, 'click', infoCallback(record.originIdent, faMarker));
		google.maps.event.addListener(taMarker, 'click', infoCallback(record.destinationIdent, taMarker));

		google.maps.event.addListener(flightPath, 'click', flightPathCallback(flightPathRoute, flightPath));

    // mouseover help for path is not working well
    /*
	  var tooltip = new google.maps.InfoWindow({
    	content: "Tooltip"
		});

    google.maps.event.addListener(flightPath, 'mouseover', function(event) {
    	var vertices = flightPath.getPath();
    	var v_index = vertices.getAt(parseInt(vertices.getLength()/2));
    	var viLatLong = new google.maps.LatLng(v_index.lat(), v_index.lng);
      tooltip.setPosition(viLatLong);
      tooltip.open(map);
    });

    // close help on mouseout
    google.maps.event.addListener(flightPath, 'mouseout', function() {
      tooltip.close();
    });
    */

    flightPath.setMap(map);
    flight_paths.push(flightPath);
  });

  jQuery("#mission_count").html(mission_legs(filter_object).count());

  //originDistance
  var originDistance_options = jQuery("#originDistance").find('option');
  jQuery.each(originDistance_options, function(index, option) {
    originDistance_str = "\"originDistance\":{\"lte\":" + option.value + "}";
    originDistance_obj = jQuery.parseJSON("{" + originDistance_str + "}");
    if (option.text.indexOf(" (") >= 0) opt_text = option.text.substring(0,option.text.indexOf(" (")); else opt_text = option.text;
    if (filter_object_str != "")  {
      option.text = opt_text + " (" + mission_legs(jQuery.parseJSON("{" + filter_object_str + "}")).filter(originDistance_obj).count() + ")";
    } else {
      option.text = opt_text + " (" + mission_legs().filter(originDistance_obj).count() + ")";
    }
  });
  // destDistance
  var destDistance_options = jQuery("#destDistance").find('option');
  jQuery.each(destDistance_options, function(index, option) {
    destDistance_str = "\"destDistance\":{\"lte\":" + option.value + "}";
    destDistance_obj = jQuery.parseJSON("{" + destDistance_str + "}");
    if (option.text.indexOf(" (") >= 0) opt_text = option.text.substring(0,option.text.indexOf(" (")); else opt_text = option.text;
    if (filter_object_str != "")  {
      option.text = opt_text + " (" + mission_legs(jQuery.parseJSON("{" + filter_object_str + "}")).filter(destDistance_obj).count() + ")";
    } else {
      option.text = opt_text + " (" + mission_legs().filter(destDistance_obj).count() + ")";
    }
  });
  // seatsAvailable
  var seatsAvailable_options = jQuery("#seatsAvailable").find('option');
  jQuery.each(seatsAvailable_options, function(index, option) {
    if (option.value=="all") {
      seatsAvailable_str = "\"seatsAvailable\":{\"gte\":0}";
    } else {
      seatsAvailable_str = "\"seatsAvailable\":{\"gte\":" + option.value + "}";
    }
    seatsAvailable_obj = jQuery.parseJSON("{" + seatsAvailable_str + "}");
    if (option.text.indexOf(" (") >= 0) opt_text = option.text.substring(0,option.text.indexOf(" (")); else opt_text = option.text;
    if (filter_object_str != "")  {
      option.text = opt_text + " (" + mission_legs(jQuery.parseJSON("{" + filter_object_str + "}")).filter(seatsAvailable_obj).count() + ")";
    } else {
      option.text = opt_text + " (" + mission_legs().filter(seatsAvailable_obj).count() + ")";
    }
  });

  resize();
  // filter the list table
  reset_search();
}

function reset_search() {
	list_table.columns().search('').draw();
  list_table.rows().every(function(rowIdx, tableLoop, rowLoop) {
    jQuery(list_table.row(rowIdx).node()).css("background-color","#ffffff");    		
    list_table.cell({row:rowIdx, column:9}).data(0);
  });
  list_table.order([[ 9, 'desc' ],[ 3, 'asc' ]]).draw();
}

function resize() {
  jQuery('#map_canvas').css("height",jQuery(window).height()-180);
  jQuery('#map_canvas').css("width",jQuery("#left_column").width());
  //var center = map.getCenter();
  google.maps.event.trigger(map, 'resize');
  //map.setCenter(center);
}

jQuery(document).ready(function() {
    jQuery("#start_date").datepicker({
      defaultDate: 0,
      changeMonth: true,
      numberOfMonths: 1,
      dateFormat: "mm-dd-yy",
      minDate: 0,
      onClose: function( selectedDate ) {
        jQuery("#end_date").datepicker( "option", "minDate", selectedDate );
      }
    });
    jQuery("#end_date").datepicker({
      defaultDate: "+2w",
      changeMonth: true,
      numberOfMonths: 1,
      dateFormat: "mm-dd-yy",
      minDate: 0,
      onClose: function( selectedDate ) {
        jQuery("#start_date").datepicker( "option", "maxDate", selectedDate );
      }
    });

  // extend the functionality of the datatables search to filter based on the user controls
  jQuery.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
  	var filterCheck = true;
    var originDistance = parseInt(jQuery("#originDistance option:selected").val());
    if (parseFloat(data[1]) >= originDistance) filterCheck = false;

    var destDistance = parseInt(jQuery("#destDistance option:selected").val());
    if (parseFloat(data[2]) >= destDistance) filterCheck = false;

    var seatsAvailable = jQuery("#seatsAvailable option:selected").val();
    if (seatsAvailable != "all") {
      if (parseFloat(data[4]) < parseInt(seatsAvailable)) filterCheck = false;
    }

    if (jQuery("#start_date").val()) { 
      var startDate = jQuery("#start_date").val();
      var sd_obj = moment(startDate);
      if (parseInt(data[3]) < sd_obj.format("X")) filterCheck = false;
    }
    if (jQuery("#end_date").val()) { 
      var endDate = jQuery("#end_date").val();
      var ed_obj = moment(endDate);
      if (parseInt(data[3]) > ed_obj.format("X")) filterCheck = false;
    }
    return filterCheck;
  });

  jQuery("#pending_deadheads_list").on('init.dt', function () {
      list_table = jQuery(this).DataTable();	
    }).dataTable({
    	"columnDefs": [
        {
          "targets": [ 0,1,2,3,4,9 ],
          "visible": false
        },
        {
          "targets": [ 5,7,8 ],
          "visible": true
        },
        {
          "targets": [ 5,7,8,9 ],
          "orderable": true
        }
      ]
  });

  jQuery("#zoom_to_route").click(function() {
    reset_search();
  });

  jQuery("button").button();

  window.onresize = resize;

  google.maps.visualRefresh = true;
  jQuery('#map_canvas').css("height",jQuery(window).height()-180);
  jQuery('#map_canvas').css("width",jQuery("#left_column").width());
    
  // set initial values here based on what the person entered
  // number of passengers = seats available
  //jQuery("#seatsAvailable").val();
  // start and end date (one day before and one after the appmt date)
  //var appt_date = moment("2018-12-18");
  //appt_date.add(1, 'days');
  //jQuery("#end_date").val(appt_date.format("MM-DD-YYYY"));
  // weight available
  gInitialize(); // google map



});