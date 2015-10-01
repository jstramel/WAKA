/* Return the number of songs in database by artist 'Dire Straits' */

SELECT count(*)
  FROM songs
	JOIN albums
	  ON songs.album_id = albums.id
	JOIN artists
	  ON albums.artist_id = artists.id
  WHERE artists.name = 'Dire Straits';
