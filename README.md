# web4_show

###Your can use data from json in php
```
$var = file_get_contents('');
$data = json_decode($var, true);
```

###You can use 2 syntax input data from json
```
while (list(,$value) = each($data)) {
  $name = $value["name"];
}
```
and
```
foreach($data as $value){
 $name = $value["name"];
}
```

###You can get a fill data
```
id  = ID Object
name = Name Student
stu_id = ID Student
titles = Title Project
description = Description Project
effect  = Effect from Project
youtube = Youtube Presentation Project
thumneils = thumneil cover Project
imgwork = Image Project
```

###thumneils directory file :::  image/small
###ImageProject directory file :::  image/big
