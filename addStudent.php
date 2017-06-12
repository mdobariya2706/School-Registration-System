
<div class="row">

<div class="container col-md-6 col-md-offset-3" id="container">
    <form class="form-horizontal" role="form" method="POST" ng-submit='addStudent()' enctype="multipart/form-data">
        <h2>Add Student</h2><h6><div class="error" ng-show="showError" style="color: red">
      Username or password is not correct.
    </div></h6>
        <div class="form-group">
            <label for="name" class="col-sm-2 ">Name</label>
            <div class="col-sm-10">
                <input type="text" id="name" ng-model="stu.name" placeholder="Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="contact" class="col-sm-2 ">Contact</label>
            <div class="col-sm-10">
                <input type="number" id="contact" ng-model="stu.contact" placeholder="Password" class="form-control">
            </div>
        </div>  
        <div class="form-group">
            <label for="email" class="col-sm-2 ">Email</label>
            <div class="col-sm-10">
                <input type="text" id="email" ng-model="stu.email" placeholder="Email" class="form-control" >
            </div>
        </div>
        
        <div class="form-group" >  
            <label for="class" class="col-sm-2 " >Select Class</label>
            <div class="col-sm-10">
                <select name="class"  class="form-control" ng-model="stu.class" ng-change="loadSubjects()">  
                    <option value="">Select Class</option>  
                    <option ng-repeat= "classData in class"  value="{{classData.cName}}" >
                        {{classData.cName}}
                    </option>  
                </select> 
            </div>                      
        </div>

        <div class="row">   
            <label for="subject1" class="col-sm-2 " >Select Subject - 1</label>
            <div class="col-sm-4">
                <select name="subject1"  class="form-control" ng-model="stu.subject1">  
                    <option value="">Select Subject</option>  
                    <option ng-repeat= "sub in subjects" value="{{sub.sbName}}" >
                        {{sub.sbName}}
                    </option>  
                </select> 
            </div>                      
                    
            <label for="mark1" class="col-sm-2 ">Marks </label>
            <div class="col-sm-4">
                <input type="text" id="mark1" ng-model="stu.mark1" placeholder="Mark" class="form-control" >
            </div>            
        </div>
        <div class="row">   
            <label for="subject2" class="col-sm-2 ">Select Subject - 2</label>
            <div class="col-sm-4">
                <select name="subject2"  class="form-control" ng-model="stu.subject2" ">  
                    <option value="">Select Subject</option>  
                    <option ng-repeat= "sub in subjects"  value="{{sub.sbName}}" >
                        {{sub.sbName}}
                    </option>  
                </select> 
            </div>                      
                        
            <label for="mark3" class="col-sm-2 ">Marks</label>
            <div class="col-sm-4">
                <input type="text" id="mark3" ng-model="stu.mark2" placeholder="Mark" class="form-control" >
            </div>            
        </div>

        <div class="row">   
            <label for="subject3" class="col-sm-2 ">Select Subject</label>
            <div class="col-sm-4">
                <select name="subject3"  class="form-control" ng-model="stu.subject3" ">  
                    <option value="">Select Subject</option>  
                    <option ng-repeat= "sub in subjects" value="{{sub.sbName}}" >
                        {{sub.sbName}}
                    </option>  
                </select> 
            </div>                      
                    
            <label for="mark3" class="col-sm-2 ">Marks</label>
            <div class="col-sm-4">
                <input type="text" id="mark3" ng-model="stu.mark3" placeholder="Mark" class="form-control" >
            </div>            
        </div>


        

           
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" id="addStudent" name="addStudent" class="btn btn-primary btn-block">Add Student</button>
            </div>
        </div>

    </form> <!-- /form -->
</div> <!-- ./container -->
</div>
