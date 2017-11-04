<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facades\DB;
use App\Http\Requests;

//use App\testdb;

class BasicController extends Controller
{

  public function test(){
    return view('test');
  }

   public function all(){
     $sql="select*from member_test";
     $data['result']=DB::select($sql);

     return view('view',$data);
   }

//json
   public function find_id($id){
     $members = DB::table('member_test')->where('id','=',1)->get();
      //$sql="select * from member_test where id = '$id'";
      //$data['result']=DB::select($sql);

     return $members;
   }

   public function find_id2($id){
      // $members = DB::table('member_test')->where('id','=',1)->get();
      $sql="select * from member_test where id = '$id'";
      $data['result']=DB::select($sql);

     return view('view',$data);
   }

   public function insert(){
     return view('insert');
   }

   public function insert2(Request $Request){
     $Fname = $Request->input('Fname');
     $Lname = $Request->input('Lname');
     $sex = $Request->input('sex');

     //echo "$fname,$lname,$address <br/>";
     //DB::insert('insert into members (fname,lname,address) values (?,?,?)',
     //[$fname, $lname, $address]);

     echo "Data from save into database. <br/>";

     echo "<a href='all'><p>Back </a>";
     DB::table('member_test')->insert(array(
      'Fname'=>$Fname,
      'Lname'=>$Lname,
      'sex'=>$sex,
     ));

    //  $member = new member_test;
    //  $member->Fname = $Fname;
    //  $member->Lname = $Lname;
    //  $member->sex = $sex;
    //  $member->save();
   return " ";
  }

  public function delete($id){
    DB::delete('delete from member_test where id=?',[$id]);
    DB::table('member_test')->where('id',$id)->delete();

    // $member=member_test::find($id);
    // $member->delete();

    echo "<p>Delete OK.<br/>";
    echo "<a href='../all'><p>Back </a>";
      return " ";
  }

  public function update($id){

    $sql="select * from member_test where id='$id'";
    $data['result']=DB::select($sql);

    //return view('update',$data);
    return $data;
  }

}
