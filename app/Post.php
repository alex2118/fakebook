<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    public function addComment($user_id, $content)
    {
      $this->comments()->create([
        'user_id' => $user_id,
        'content' => $content
      ]);
    }

    // practice code from archives episode
    public function scopeFilter($query, $filters)
    {
      if ($month = $filters['month'])
      {
        return $query->whereMonth('created_at', Carbon::parse($month)->month);
      }

      if ($year = $filters['year'])
      {
        return $query->whereYear('created_at', $year);
      }
    }
}
