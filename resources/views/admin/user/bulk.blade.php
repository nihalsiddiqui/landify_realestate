@php
    if(isset($_POST['checkbox'])){
                           foreach ($_POST['checkbox'] as $user_ids){
                               $bulk = $_POST['bulk_option'];
                               if($bulk == 'active'){
                                   $pub = "UPDATE admins SET status = '1' WHERE id = '$user_ids'";
                                   mysqli_query($conn,$pub);
                               }
                               if($bulk == 'deactivated'){
                                   $pub = "UPDATE admins SET status = '0' WHERE id = '$user_ids'";
                                   mysqli_query($conn,$pub);
                               }
                               if($bulk == 'delete'){
                                   $bulk_posts = "SELECT * FROM `admins` WHERE id = '$user_ids'";
                                   $bulk_posts_res = mysqli_query($conn,$bulk_posts);
                                   $bulk_posts_row = mysqli_fetch_array($bulk_posts_res);
                                   $bulk_posts_imgs = $bulk_posts_row['image'];

                                   $bulk_del = "DELETE FROM admins WHERE id = '$user_ids'";
                                   $bulk_del_res = mysqli_query($conn,$bulk_del);
                                   if ($bulk_del_res){
                                       unlink('../img/bg-img/'.$bulk_posts_imgs);
                                       header('refresh');
                                   }
                               }
                           }
                       }
@endphp