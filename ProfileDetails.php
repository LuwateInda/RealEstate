
<link rel="stylesheet" type="text/css" href="ProfileDetailesStyle.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css" >
<div class="container-xl px-4 mt-4">
    <h2>Profile Details</h2>
    <hr class="mt-0 mb-4">
    <div class="row">
        <form action="control.php" method="POST" enctype = "multipart/form-data">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">    
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <input type = "file" class="btn btn-secondary" accept = "image/png, image/jpeg" name="image">
                    </div>
                    
                </div>
            </div>

            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                    
                        <input type="hidden" name="id" value="1" />
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" name="username">
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" name="email">
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="id">id</label>
                            <input class="form-control" id="inputid" type="text" placeholder="Enter your id" name="id">
                        </div>
                    </div>
                       
                    <div class="input-group">
                        <button type="submit" class="btn btn-secondary w-100 mb-3" name="save_changes">Save Changes</button>
                    </div>
                    <div>
                        <a href="index.html">Back to index</a>
                    </div>
                    
                    </div>
                </div> 
            </div>
        </form>
    </div>
</div>