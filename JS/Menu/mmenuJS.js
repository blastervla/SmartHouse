jQuery(document).ready(function($) {
            $("#menu").mmenu({
               "extensions": [
                  "border-full",
                  "effect-slide-menu",
                  "effect-slide-panels-100",
                  "pageshadow",
                  "theme-dark"
               ],
               "navbars": [
                  {
                     "position": "top",
                     "content": [
                        "searchfield"
                     ]
                  },
                  {
                     "position": "bottom",
                     "content": [
                        "<a>&copy;2015 Bla, Vla & Zeq Enterprises</a>"
                     ]
                  }
               ]
            });
         });