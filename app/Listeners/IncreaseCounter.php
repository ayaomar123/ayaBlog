<?php

namespace App\Listeners;
use App\Events\ArticleViewer;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncreaseCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ArticleViewer $event)
    {
        $this->updateView($event->view);
    }

    function updateView($view){

        $view->viewer = $view->viewer +1;
        $view->save();
    }
}
