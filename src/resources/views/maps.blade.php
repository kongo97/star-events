<div id="googleMap" style="width:100%;height:400px;"></div>

                <script>
                    function myMap() {
                        var mapProp= {
                            center:new google.maps.LatLng(45.4313814,9.2826141),
                            zoom:14,
                        };

                        const styles = {
                            default: [],
                            dark: [
                                {
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#212121"
                                    }
                                    ]
                                },
                                {
                                    "elementType": "labels.icon",
                                    "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                    ]
                                },
                                {
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#757575"
                                    }
                                    ]
                                },
                                {
                                    "elementType": "labels.text.stroke",
                                    "stylers": [
                                    {
                                        "color": "#212121"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "administrative",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#757575"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "administrative.country",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#9e9e9e"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "administrative.land_parcel",
                                    "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "administrative.locality",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#bdbdbd"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "poi",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#757575"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "poi.park",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#181818"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "poi.park",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#616161"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "poi.park",
                                    "elementType": "labels.text.stroke",
                                    "stylers": [
                                    {
                                        "color": "#1b1b1b"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                    {
                                        "color": "#2c2c2c"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#8a8a8a"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#373737"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#3c3c3c"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "road.highway.controlled_access",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#4e4e4e"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "road.local",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#616161"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "transit",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#757575"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#000000"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "color": "#3d3d3d"
                                    }
                                    ]
                                }
                            ]
                        }

                        // Set the map's style to the initial value of the selector.
                        const styleSelector = "dark";
                        
                        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                        map.setOptions({ styles: styles[styleSelector] });

                        var marker = new google.maps.Marker({position: new google.maps.LatLng(45.4313814,9.2826141)});

                        marker.setMap(map);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDExj4deMQxtIHgSPMXE0fVjjbkbv-8DtA&callback=myMap"></script>