SELECT title,channel, tv_series_intervals.week_day, tv_series_intervals.show_time from tv_series
    INNER JOIN tv_series_intervals
    ON tv_series.id = tv_series_intervals.id_tv_series
WHERE (tv_series_intervals.week_day * tv_series_intervals.show_time > {$timeofweek}) ORDER BY tv_series_intervals.week_day * tv_series_intervals.show_time DESC
