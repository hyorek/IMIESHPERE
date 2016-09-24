/*  */
/* prepare */INSERT INTO address(street, street_number, building, name, id_city) VALUES (:street, :street_number, :building, :name, :id_city);
/* execute */array(
    'street' => /**/,
    'street_number' => /**/,
    'building' => /**/,
    'name' => /**/,
    'id_city' => /**/
);


/* prepare */INSERT INTO city(city_name, postal_code) VALUES (:city_name, :postal_code);
/* execute */array(
    'city_name' => /**/,
    'postal_code' => /**/
);


/* prepare */INSERT INTO payment(price) VALUES (:price);
/* execute */array(
    'price' => /**/
);


/* prepare */INSERT INTO role(name) VALUES (:name);
/* execute */array(
    'name' => /**/
);


/* prepare */INSERT INTO grade(name, promotion) VALUES (:name, :promotion);
/* execute */array(
    'name' => /**/,
    'promotion' => /**/
);

/***************************************************************************/


/* Gere avec registration*/
/* Table de relation */
INSERT INTO cost VALUES;
SELECT * FROM cost;


/***************************************************************************/

/*  event  */

/* prepare */INSERT INTO event(name, description, date_start, date_end) VALUES (:name, :description, :date_start, :date_end);
/* execute */array(
    'name' => /**/,
    'description' => /**/,
    'date_start' => /**/,
    'date_end' => /**/
);

SELECT * FROM event WHERE /**/ ORDER BY DESC;
SELECT * FROM event WHERE /**/ ORDER BY ASC;

SELECT * FROM event 
INNER JOIN event_type_event ON event.id_event = event_type_event.id_event 
INNER JOIN type_event ON type_event.id_type_event = event_type_event.id_type_event
WHERE /**/ AND /**/
ORDER BY DESC;

SELECT * FROM event  
INNER JOIN event_type_event ON event.id_event = event_type_event.id_event 
INNER JOIN type_event ON type_event.id_type_event = event_type_event.id_type_event 
WHERE /**/ AND /**/
ORDER BY ASC;

/***************************************************************************/

/* Creation ou modif d'event */
SELECT * FROM type_event;

/* prepare */INSERT INTO type_event(name, description) VALUES (:name, :description);
/* execute */array(
    'name' => /**/,
    'description' => /**/
);

/* Table de relation */
INSERT INTO event_address VALUES;
INSERT INTO event_type_event VALUES;
INSERT INTO user_registration VALUES;


/* page affevent */
INSERT INTO registration VALUES;

/* prepare */INSERT INTO registration(place, date_start, date_end, pre_registration, id_event) VALUES (:place, :date_start, :date_end, :pre_registration, :id_event);
/* execute */array(
    'place' => /**/,
    'date_start' => /**/,
    'date_end' => /**/,
    'pre_registration' => /**/,
    'id_event' => /**/
);



/***************************************************************************/

/* USER */

SELECT * FROM user;
SELECT * FROM user WHERE id_user = /**/;

/* prepare */INSERT INTO user(membership_number, firstname, lastname, email, phone, password, id_grade) VALUES (:membership_number, :firstname, :lastname, :email, :phone, :password, :id_grade);
/* execute */array(
    'membership_number' => /**/,
    'firstname' => /**/,
    'lastname' => /**/,
    'email' => /**/,
    'phone' => /**/,
    'password' => /**/,
    'id_grade' => /**/
);

/* Table de relation */
INSERT INTO user_role VALUES;




event 1 a 6
address 1 a 10


INSERT INTO event_address (id_event,id_address) VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6);


8635155