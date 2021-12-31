--Custom queryt

--Hakee kymmenen elokuvaa joissa Tom Cruise on näytellyt ja palauttaa niiden nimet sekä roolin jota hän on näytellyt

CREATE OR REPLACE VIEW V1( primary_title, role_)
AS SELECT DISTINCT T.primary_title, H.role_
FROM Titles AS T, Had_role AS H
WHERE T.title_id = H.title_id

AND H.name_id = (
  SELECT N.name_id
  FROM Names_ AS N
  WHERE N.name_ LIKE 'Tom Cruise')
LIMIT 10;

SELECT * FROM V1;