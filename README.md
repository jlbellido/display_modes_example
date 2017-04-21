# Display modes example

This is a example module for showing how we can define and manage display modes in Drupal 8 during the talk ["Get the most out of display modes"]

## Features
This module provides the following components and examples:
  - A Tapa content entity.
  - Form mode for the tapa entity : 'suggested_tapa_form'
  - View modes for the tapa entity : 'highlighted' and 'teaser'
  - Default views list for showing a list of tapas using the teaser view mode available from the path "/tapas"
  - Default views block for showing tapos using the highlighted view mode. It is displated at "/tapas".
  - Define two pseudo-fields: 'common_text' and 'common_text_form'. This pseudo-fields are available at Tapas forms and displays.
  
## Important paths
 - /tapas : List of tapas.
 - /admin/structure/tapa/settings : Main path for administer the tapa entity. From here we can configure the form modes and view modes for the tapa entity.
 - /admin/structure/tapa : Main path for create new tapas content. From here we can access to both tapa form modes.

## Related content to this repository:
- [Slides of the session]

## Credits
Author : Jose Luis Bellido Rojas ([jlbellido])

   ["Get the most out of display modes"]: <http://slides.com/jlbellido/display-modes-drupal-8#/>
   [Slides of the session]: <http://slides.com/jlbellido/display-modes-drupal-8#/>
   [jlbellido]: <https://www.drupal.org/u/jlbellido>
