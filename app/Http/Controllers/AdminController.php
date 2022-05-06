<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DB;
use App\Models\Employee;
use App\Models\User;
use App\Models\Account;
use App\Models\Mechanic;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Builder;

class AdminController extends Controller
{
    public function index()
    {
        // $data=DB::table('categories')
        //         ->select('categories.*',
        //         DB::raw("(SELECT SUM(products.product_price) FROM products 
        //         where products.category_id=categories.id 
        //         GROUP BY products.category_id as products"))->get();
        // dd($data);

        // $flight=Employee::find(1)->restore();
        
        // dd($flight);
        //$ab=Employee::where('status',0)->restore();
        // $data=Account::find(2)->user;
        // dd($data);

        // $product=Category::with('currentPricing')->get();
        // dd($product);

        // $owner=Mechanic::with('carOwner')->get();
        // return view('test',compact('owner'));

        // /$user=User::find(2);
        // dd($user);
        // return view('test',compact('user'));
        // dd($roles);

        // $user_profile=Post::find(2);
        // dd($user_profile->image);

        // $users=Post::with('user')->get();
        // // dd($users);
        // return view('test',compact('users'));

        //$users=Post::with('user')->get();
        // dd($users);
        //return view('test',compact('users'));

        // $posts=Post::has('comments','>=2')->get();
        // dd($posts);
        // $posts=Post::whereHas('comments',function(Builder $query){
        //     $query->where('comment','like','nahi%');
        // },'>=0')->get();
        // $posts = Post::whereHas('comments', function (Builder $query) {
        //     $query->where('comment', 'like', 'good%');
        // // }, '>=', 1)->get();
        //     $posts=Post::whereRelation('comments','is_approved',1)->get();
        // // dd($posts);
        // $posts=Post::doesntHave('comments')->get();
        // // dd($posts);
        // $posts=Post::whereDoesntHave('comments',function(Builder $query){
        //     $query->where('comment','like','mahi%');
        // })->get();
        // $comments=Comment::whereHasMorph('commentable',[Post::class],function(Builder $query){
        //     $query->where('name','like','Blog%');
        // })->get();
        // $posts=Post::withCount('comments')->get();
        // dd($posts);
        // dd($comments);
        // $post=Post::find(2);
        // $post->loadCount('comments');
        // dd($post);
        // $posts=Post::select(['id','name'])
        //             ->withCount('comments')
        //             ->get();
        // dd($posts);

        $posts=Post::select(['id','name'])
                    ->withExists('comments')
                    ->get();
        dd($posts);

    }
}
