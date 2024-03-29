<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'trip_search' => [[], ['_controller' => 'App\\Controller\\TripController::search'], [], [['text', '/trip/search']], [], []],
    'trip_treatment' => [['id'], ['_controller' => 'App\\Controller\\TripController::treatment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trip/treatment']], [], []],
    'routeRequest' => [['id'], ['_controller' => 'App\\Controller\\TripController::routeRequest'], [], [['text', '/route_request'], ['variable', '/', '[^/]++', 'id', true], ['text', '/trip']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\AuthenticatorController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\AuthenticatorController::logout'], [], [['text', '/logout']], [], []],
    'booking_index' => [[], ['_controller' => 'App\\Controller\\BookingController::index'], [], [['text', '/booking/']], [], []],
    'booking_new' => [['id'], ['_controller' => 'App\\Controller\\BookingController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], []],
    'booking_delete' => [['id'], ['_controller' => 'App\\Controller\\BookingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'message_index' => [[], ['_controller' => 'App\\Controller\\MessageController::index'], [], [['text', '/message/']], [], []],
    'message_new' => [['id'], ['_controller' => 'App\\Controller\\MessageController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], []],
    'message_discussion' => [['id'], ['_controller' => 'App\\Controller\\MessageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/message/discussion']], [], []],
    'message_discussion_details' => [['id'], ['_controller' => 'App\\Controller\\MessageController::detail'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message/discussion']], [], []],
    'message_edit' => [['id'], ['_controller' => 'App\\Controller\\MessageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], []],
    'message_delete' => [['id'], ['_controller' => 'App\\Controller\\MessageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'review_index' => [[], ['_controller' => 'App\\Controller\\ReviewController::index'], [], [['text', '/review/']], [], []],
    'review_new' => [['id'], ['_controller' => 'App\\Controller\\ReviewController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/review']], [], []],
    'review_show' => [['id'], ['_controller' => 'App\\Controller\\ReviewController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/review']], [], []],
    'review_edit' => [['id'], ['_controller' => 'App\\Controller\\ReviewController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/review']], [], []],
    'review_delete' => [['id'], ['_controller' => 'App\\Controller\\ReviewController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/review']], [], []],
    'travel_preferences_index' => [[], ['_controller' => 'App\\Controller\\TravelPreferencesController::index'], [], [['text', '/travel/preferences/']], [], []],
    'travel_preferences_new' => [[], ['_controller' => 'App\\Controller\\TravelPreferencesController::new'], [], [['text', '/travel/preferences/new']], [], []],
    'travel_preferences_show' => [['id'], ['_controller' => 'App\\Controller\\TravelPreferencesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/travel/preferences']], [], []],
    'travel_preferences_edit' => [['id'], ['_controller' => 'App\\Controller\\TravelPreferencesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/travel/preferences']], [], []],
    'travel_preferences_delete' => [['id'], ['_controller' => 'App\\Controller\\TravelPreferencesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/travel/preferences']], [], []],
    'trip_index' => [[], ['_controller' => 'App\\Controller\\TripController::index'], [], [['text', '/trip/']], [], []],
    'trip_new' => [[], ['_controller' => 'App\\Controller\\TripController::new'], [], [['text', '/trip/new']], [], []],
    'trip_show' => [['id'], ['_controller' => 'App\\Controller\\TripController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trip']], [], []],
    'trip_finish' => [['id'], ['_controller' => 'App\\Controller\\TripController::finish'], [], [['text', '/finish'], ['variable', '/', '[^/]++', 'id', true], ['text', '/trip']], [], []],
    'trip_start' => [['id'], ['_controller' => 'App\\Controller\\TripController::start'], [], [['text', '/start'], ['variable', '/', '[^/]++', 'id', true], ['text', '/trip']], [], []],
    'trip_details' => [['id'], ['_controller' => 'App\\Controller\\TripController::details'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trip/details']], [], []],
    'trip_edit' => [['id'], ['_controller' => 'App\\Controller\\TripController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/trip']], [], []],
    'trip_delete' => [['id'], ['_controller' => 'App\\Controller\\TripController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trip/delete']], [], []],
    'test' => [['ville'], ['_controller' => 'App\\Controller\\TripController::test'], [], [['variable', '/', '[^/]++', 'ville', true], ['text', '/trip/test']], [], []],
    'type_of_vehicule_index' => [[], ['_controller' => 'App\\Controller\\TypeOfVehiculeController::index'], [], [['text', '/type/of/vehicule/']], [], []],
    'type_of_vehicule_new' => [[], ['_controller' => 'App\\Controller\\TypeOfVehiculeController::new'], [], [['text', '/type/of/vehicule/new']], [], []],
    'type_of_vehicule_show' => [['id'], ['_controller' => 'App\\Controller\\TypeOfVehiculeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/of/vehicule']], [], []],
    'type_of_vehicule_edit' => [['id'], ['_controller' => 'App\\Controller\\TypeOfVehiculeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/type/of/vehicule']], [], []],
    'type_of_vehicule_delete' => [['id'], ['_controller' => 'App\\Controller\\TypeOfVehiculeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/of/vehicule']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_view_profile' => [['id'], ['_controller' => 'App\\Controller\\UserController::viewProfile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/profile']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'vehicule_index' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule/']], [], []],
    'vehicule_new' => [[], ['_controller' => 'App\\Controller\\VehiculeController::new'], [], [['text', '/vehicule/new']], [], []],
    'vehicule_show' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vehicule']], [], []],
    'vehicule_edit' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/vehicule']], [], []],
    'vehicule_delete' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vehicule']], [], []],
];
