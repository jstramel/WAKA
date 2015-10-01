/*
 * Return 'Artist' and 'Album' for each album released in the 1980's.
 * Sorted alphabetically by artist and chronologically within the artist results.
 */

SELECT artists.name as 'Artist', albums.name as 'Album', albums.released as 'Release Date'
  FROM artists
  JOIN albums
    ON albums.artist_id = artists.id
  WHERE released BETWEEN '1980-01-01' AND '1989-12-31'
  ORDER BY artists.name, released;
