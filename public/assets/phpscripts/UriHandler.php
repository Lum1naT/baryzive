<?php
class UriHandler {
  // Properties


  // Methods
  public static function decodeUri($request) {
    if(strpos($request, "?") !== false ){

      $splitUrl = explode('?',$request);

      $request = $splitUrl[0];
      $escapits = ['%%', '%=', '%&', '%&'];
      $getParam = $splitUrl[1];
      foreach ($escapits as $value) {
        $getParam = str_replace($value, substr($value, 1), $getParam);

      }


      if(strpos($getParam, "&") !== false ){

      $splitGet = explode('&',$getParam);

      foreach ($splitGet as $value) {
        $splitVarVal = explode('=', $value);
        $splitVariable = $splitVarVal[0];
        $splitValue = $splitVarVal[1];


      }
  }

}
  return $getParam;
}


}
