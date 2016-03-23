<?php
/**
 * Pico RemoveIndex Plugin
 *
 * @author TakamiChie
 * @link http://onpu-tamago.net/
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */

class Pico_RemoveIndex extends AbstractPicoPlugin {

  protected $enabled = false;

  public function onSinglePageLoaded(array &$pageData)
  {
    $url = &$pageData['url'];
    if(substr($url, -5) === "index") {
      $url = substr($url, 0, -5);
    }
  }

}

?>
