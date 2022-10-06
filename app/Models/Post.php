<?php

namespace App\Models;


class Post
{
    //use HasFactory;
   private static $blokpost =[
    ["title"=>"Arikel lepas",
      "slug"=>"Judul tulisan pertama",
      "body"=>"It is a long established fact that a reader will be distracted by the
      readable content of a page when looking at its layout. The point of using Lorem
      Ipsum is that it has a more-or-less normal distribution of letters, as opposed
       to using 'Content here, content here', making it look like readable English.
       Many desktop publishing packages and web page editors now use Lorem Ipsum as
       their default model text, and a search for 'lorem ipsum' will uncover "
   ],
   ["title" =>"Arikel lepas",
   "slug" =>"Judul tulisan kedua",
   "body" =>"It is a long established fact that a reader will be distracted by the
   readable content of a page when looking at its layout. The point of using Lorem
   Ipsum is that it has a more-or-less normal distribution of letters, as opposed
    to using 'Content here, content here', making it look like readable English.
    Many desktop publishing packages and web page editors now use Lorem Ipsum as
    their default model text, and a search for 'lorem ipsum' will uncover "
]
   ];

public static function all()
{
 return self::$blokpost;
}

}
