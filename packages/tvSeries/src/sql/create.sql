DROP DATABASE exads;
CREATE DATABASE exads;

CREATE TABLE tv_series (
     id int,
     title varchar(255),
     channel varchar(255),
     gender bool
);

CREATE TABLE tv_series_intervals (
   id_tv_series int,
   week_day integer,
   show_time integer
);
