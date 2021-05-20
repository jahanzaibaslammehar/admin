<?php

namespace App\Observers;

use App\Jobs\PostCreatedNotificationJob;
use App\Models\Post;
use App\Notifications\PostCreatedNotification;
use App\Services\UpdateCountService;

class PostObserver
{
    private $updateCountService;

    public function __construct(UpdateCountService $updateCountService)
    {
        $this->updateCountService = $updateCountService;    
    }
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        dispatch(new PostCreatedNotificationJob($post));
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        $count = $post->updateCount()->first();
        if($count){
            $newCount = $this->updateCountService->updateCount($count->count);
            $post->updateCount()->find($count->id)->update(['count' => $newCount]);
        }else{
            $post->updateCount()->create([
                'count' => 1
            ]);
        }
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
