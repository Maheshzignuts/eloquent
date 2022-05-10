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
use App\Jobs\TestEmailJob;
use Illuminate\Support\Collection;
use Mail;
use App\Mail\TestMail;
use App\Events\SendMail;
use Event;
use Illuminate\Support\Arr;
use Helper;
class AdminController extends Controller
{
    public function index(Employee $employee)
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

        // $posts=Post::select(['id','name'])
        //             ->withExists('comments')
        //             ->get();
        // dd($posts);
        // $posts=Post::withSum('comments','id')->get();
        // // dd($posts->comments_sum_id);
        // $users=collect(['name'=>'John Doe','email'=>'johndoe@example.com']);
        // $test=$users->contains('John Doe');
        // $test=$users->contains('John Admin');
        
        // $collection=collect([
        //     ['id'=>'200','amount'=>'500'],
        //     ['name'=>'201','country'=>'200']
        // ]); 
        // $bcd=$collection->contains('country','500');
        // dd($bcd);

        // $users=Post::all();
        // $user=$users->fresh('comments');
        // dd($user);
        //$users=User::all();
        // $user=$users->intersect(User::whereIn('id',[1,2,3]))->get();
        // $todocollection=collect([
        //     [
        //         'user_id'=>1,
        //         'title'=>'Laravel Basic',
        //         'description'=>'This is the basic scenario here'
        //     ],
        //     [
        //         'user_id'=>2,
        //         'title'=>'Laravel Advance',
        //         'description'=>'This is the advance scenario here'
        //     ]
        //     ]);
        // $user=User::all();
        // dd($user);
        // // dd($todocollection);
        // $cities=new Collection(['London','Paris','New York','Toranto','Tokyo']);
        // $cities->each(function($key,$value){
        //     echo $key. '.'.$value;
        // });
        // $user=User::all();
        // $user->each(function($value){
        //    echo  $value->id.".".$value->name ."<br>";
        //$users=User::countBy();
        //$users->count();

        //dd($users);
        //$userschunk=$users->chunk(2);
        //dd($userschunk);
        // $mystudents=[ ['id'=>1, 'name'=>'Hardik', 'mark' => 80],
        // ['id'=>2, 'name'=>'Paresh', 'mark' => 20],
        // ['id'=>3, 'name'=>'Akash', 'mark' => 34],
        // ['id'=>4, 'name'=>'Sagar', 'mark' => 45],];
        // $mystudents=collect($mystudents);
        // $passedStudent=$mystudents->filter(function($value,$key){
        //     return data_get($value,'mark') > 34;
        // });
        // $passedStudent=$passedStudent->all();
        // // dd($passedStudent);
        // $users=User::all();
        // $filtered=$users->filter(function($value,$key){
        //     return $value->id;
        // });
        // $filtered->all();
        // dd($filtered);
        // $orders = collect([
        //     ['product_id' => 'p10', 'email' => 'jdoe@example.com'],
        //     ['product_id' => 'p10', 'email' => 'billy@example.com'],
        //     ['product_id' => 'p11', 'email' => 'danny@example.com'],
        //     ['product_id' => 'p12', 'email' => 'danny@example.com'],
        // ]);
        
        // $grouped = $orders->groupBy('product_id');
        // dd($grouped);
        // $users=User::select(DB::raw('MONTH(created_at) month')
        //             ->groupBy('month')->get();
        // dd($users);
        // $users->groupBy('id');
        // dd($users);
        // $users=User::pluck('email')->toArray();
        // dd($users);
       // $users=User::all();
        //dd($users);        
        // $users->forget('name');
        // $users->all();
        // dd($users);
        //$users = collect(['name' => 'John Doe', 'email' => 'johndoe@example.com']);

        //$users->toArray();
        // $users=Post::find(13);
        // dd($users->first_name);
        // dd($users->toArray());
        // dd($users);
        // $users=Post::all()->toArray();
        // dd($users);
        // $array = Arr::add(['name' => 'Desk'], 'price', 100);
        // dd($array);
        // $array=Arr::collapse([[1,2,3],[4,5,6],[7,8,9]]);
        // dd($array);
        // $array=Arr::crossJoin([1,2],['a','b'],['I','II']);
        // dd($array);
        //$users=User::all();
        //$user=$users::divide(['name'=>'email']);
        // [$key,$values]=Arr::divide(['name'=>'desk']);
        // dd($user);
        //$newDateFormat = changeDateFormate(date('Y-m-d'),'m/d/Y');
        //$title=allUpper('titlw');
        // $title=strPlural('dog');
        // dd($title);
        // $user=User::first();
        // $test=getName($user->name);
        // dd($test);
        //$value=$request->session()->get('key','default');
        // $value=
        //$value = session('key','default');
        // $data=$request->session()->all();
        // dd($data);
       // $request->session()->put('key','value');
        //dd('key');
        // $contentTypes = $request->getAcceptableContentTypes();
        // dd($contentTypes);
        //$method = $request->bearerToken();

        // if($request->isMethod('post'))
        // {
        //     dd('hi');
        // }
        //dd($method);
        
        return $employee;
    
    }
    public function postStore(Request $request)
    {
        //dd($request->all());
        $request->session()->put('user',$request->name);
        dd($request->session()->get('user'));
        $data=$request->all();
        $post=new Post;
        $post->name=$request->name;
        $post->first_name=$request->first_name;
        $post->status=$request->status;
        $post->user_id=$request->user_id;
        $post->save();
        return response()->json(['message'=>$data]);
    }
    public function employeeStore(Request $request)
    {
        // dd($request->only(['name','email']));
        //$request->session()->put('user',$request->input('name'));
        // if($request->filled('name')){
        //     dd('hello');
        // };
        dd($request->input('name'));
        dd($request->session()->get('user'));
        $employee=new Employee;
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->status=2;
        $employee->save();
        Event::dispatch(new SendMail(1));
        // dd('hi');
        dispatch(new TestEmailJob($employee));
        //$email=new TestMail;
        // Mail::to($request['email'])->send($email);
        return response()->json(['message'=>'Employee stored successfully','data'=>$request->all()]);

    }
    public function createPost()
    {
        return view('post.create');
    }

}
