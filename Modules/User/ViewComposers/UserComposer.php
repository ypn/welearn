<?php
  namespace Modules\User\ViewComposers;

  use Illuminate\View\View;
  use Sentinel;

  class UserComposer {

      public function compose(View $view) {
        if(Sentinel::check()){
          $user = Sentinel::getUser();
          $view->with('user',array(
            'name'=>$user->first_name . ' ' . $user->last_name,
            'picture'=>$user->picture
          ));
        }

      }
}
?>
