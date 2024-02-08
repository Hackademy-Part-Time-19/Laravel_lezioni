1------------------------------

Table meteo_stations{
  id integer [primary key]
  name varchar
  city varchar
  created_at timestamp
}

Table weathers{
  id integer [primary key]
  temperature varchar
  wind varchar
  wind_direction varchar
  meteo_station_id integer
  created_at timestamp
}

Ref: "weathers"."meteo_station_id" < "meteo_stations"."id"


2----------------------------------

Table supermarkets {
  id integer [primary key]
  name varchar
  brand varchar 
  address varchar
  city varchar
  created_at timestamp
}

Table deparments {
  id integer [primary key]
  name varchar
  supermarket_id integer
  created_at timestamp
}

Table employees {
  id integer [primary key]
  name varchar
  email varchar
  role varchar
  department_id integer

}

Table products {
  id integer [primary key]
  name varchar
  price decimal
  availability integer
  department_id integer

}



Ref: "deparments"."supermarket_id" > "supermarkets"."id"

Ref: "deparments"."id" < "products"."department_id"

Ref: "deparments"."id" < "employees"."department_id"