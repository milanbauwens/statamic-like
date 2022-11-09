<?php

namespace Milanbauwens\Like\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Statamic\Facades\Entry;

class LikeController extends Controller
{
    public function like(Request $r)
    {
        $visitor = $r->server->get('HTTP_HOST');
        $entryID = $r->entry_id;

        $entry = Entry::find($entryID);
        $visitors_who_liked = $entry->likers ?? [];
        $amountOfLikes = $entry->likes ?? 0;

        // Add a like to the entry
        if (!in_array($visitor, $visitors_who_liked)) {
            $visitors_who_liked[] = $visitor;

            $amountOfLikes++;

            $entry->set('likes', $amountOfLikes);
            $entry->set('likers', $visitors_who_liked);
            $entry->save();
        } else {
            $visitors_who_liked = array_diff($visitors_who_liked, [$visitor]);

            $amountOfLikes--;

            $entry->set('likes', $amountOfLikes);
            $entry->set('likers', $visitors_who_liked);
            $entry->save();
        }
        // Go back to the entry
        return redirect()->back();
    }
}
