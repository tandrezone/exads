INSERT INTO tv_series(id, title, channel, gender) VALUES (1,'FROM','TV5',0);
INSERT INTO tv_series(id, title, channel, gender) VALUES (2, 'YellowJackets','TV5',0);
INSERT INTO tv_series(id, title, channel, gender) VALUES (3, 'Invisible City','TV5',0);
INSERT INTO tv_series(id, title, channel, gender) VALUES (4, 'Barry','Disney',0);
INSERT INTO tv_series(id, title, channel, gender) VALUES (5, 'The Great','RTP',0);
INSERT INTO tv_series(id, title, channel, gender) VALUES (6, 'You','Netflix',1);
INSERT INTO tv_series(id, title, channel, gender) VALUES (7, 'The Last of Us','HBO',1);

INSERT INTO tv_series_intervals(id_tv_series, week_day, show_time) VALUES (1,1,60);
INSERT INTO tv_series_intervals(id_tv_series, week_day, show_time) VALUES (2,1,360);
INSERT INTO tv_series_intervals(id_tv_series, week_day, show_time) VALUES (3,1,180);
INSERT INTO tv_series_intervals(id_tv_series, week_day, show_time) VALUES (4,2,400);
INSERT INTO tv_series_intervals(id_tv_series, week_day, show_time) VALUES (5,3,500);
INSERT INTO tv_series_intervals(id_tv_series, week_day, show_time) VALUES (6,4,600);
INSERT INTO tv_series_intervals(id_tv_series, week_day, show_time) VALUES (7,0,700);