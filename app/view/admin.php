 <!-- ########## START: MAIN PANEL ########## -->
 <section class="mainpanel">
     <div class="pagebody">
         <!----======= Start Color Code =======---->
         <div class="pagetitle">
             <h4>Color</h4>
         </div>
         <div class="card">
             <div class="card-body">
                 <div class="row px-3 px-xl-5 pt-3 pb-5 py-xl-5">
                     <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                         <div class="color-box bg-primary text-center py-5">
                             <h6 class="font-weight-bold text-white">Primary</h6>
                             <span class="text-primary h6 font-weight-bold">#2863EC</span>
                         </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                         <div class="color-box bg-secondary text-center py-5">
                             <h6 class="font-weight-bold text-white">Font</h6>
                             <span class="text-secondary h6 font-weight-bold">#0B1630</span>
                         </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                         <div class="color-box bg-warning text-center py-5">
                             <h6 class="font-weight-bold text-white">Accent</h6>
                             <span class="text-warning h6 font-weight-bold">#FEAC32</span>
                         </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2">
                         <div class="color-box bg-light text-center py-5">
                             <h6 class="font-weight-bold text-secondary">Background</h6>
                             <span class="text-secondary h6 font-weight-bold">#EEF3FE</span>
                         </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2">
                         <div class="color-box bg-danger text-center py-5">
                             <h6 class="font-weight-bold text-white">Negative</h6>
                             <span class="text-danger h6 font-weight-bold">#FF4949</span>
                         </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2">
                         <div class="color-box bg-success text-center py-5">
                             <h6 class="font-weight-bold text-white">Positive</h6>
                             <span class="text-success h6 font-weight-bold">#13CE66</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!----======= End Color Code =======---->

         <!----======= Start Component =======---->
         <div class="pagetitle">
             <h4>Component</h4>
         </div>
         <div class="row">
             <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                 <div class="card">
                     <div class="card-body">
                         <h2 class="text-secondary font-weight-bold mb-2">227+</h2>
                         <p class="mb-0">Uploaded Photos</p>
                     </div>
                     <canvas id="UploadedPhotos" style="width: 100%;height: 80px;"></canvas>
                 </div>
             </div>
             <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                 <div class="card">
                     <div class="card-body">
                         <h2 class="text-secondary font-weight-bold mb-2">227+</h2>
                         <p class="mb-0">Downloaded Photos</p>
                     </div>
                     <canvas id="DownloadedPhotos" style="width: 100%;height: 80px;"></canvas>
                 </div>
             </div>
             <div class="col-12 col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-body">
                         <h2 class="text-secondary font-weight-bold mb-2">127+</h2>
                         <p class="mb-0">Sold</p>
                     </div>
                     <canvas id="Sold" style="width: 100%;height: 80px;"></canvas>
                 </div>
             </div>
             <div class="col-12 col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-body">
                         <h2 class="text-secondary font-weight-bold mb-2">12+</h2>
                         <p class="mb-0">Pending Payment</p>
                     </div>
                     <canvas id="PendingPayment" style="width: 100%;height: 80px;"></canvas>
                 </div>
             </div>
         </div>
         <!----======= End Component =======---->

         <!----======= Start UI Elememnts =======---->
         <div class="pagetitle">
             <h4>UI elememnts</h4>
         </div>
         <!-- UI Button -->
         <div class="card">
             <div class="card-header py-4">
                 <h5 class="text-secondary font-weight-bold mb-0">UI Button</h5>
             </div>
             <div class="card-body">
                 <h6 class="mb-4">Default Buttons</h6>
                 <ul class="buuton-group">
                     <li><button type="button" class="btn btn-primary waves-effect waves-primary">Primary</button>
                     </li>
                     <li><button type="button" class="btn btn-secondary waves-effect waves-light">Secondary</button>
                     </li>
                     <li><button type="button" class="btn btn-success waves-effect waves-green">Success</button></li>
                     <li><button type="button" class="btn btn-danger waves-effect waves-red">Danger</button>
                     </li>
                     <li><button type="button" class="btn btn-warning waves-effect waves-yellow">Warning</button>
                     </li>
                     <li><button type="button" class="btn btn-light waves-effect waves-light">Light</button>
                     </li>
                     <li><button type="button" class="btn btn-link waves-effect waves-primary">Link</button>
                     </li>
                     <li><button type="button" class="btn btn-primary btn-md waves-effect waves-primary">Medium</button></li>
                     <li><button type="button" class="btn btn-primary btn-lg waves-effect waves-primary">Large</button></li>
                 </ul>
                 <hr class="border-dashed my-4">
                 <h6 class="mb-4">Default Outline Buttons</h6>
                 <ul class="buuton-group">
                     <li><button type="button" class="btn btn-outline-primary waves-effect waves-primary">Primary</button></li>
                     <li><button type="button" class="btn btn-outline-secondary waves-effect waves-light">Secondary</button>
                     </li>
                     <li><button type="button" class="btn btn-outline-success waves-effect waves-green">Success</button></li>
                     <li><button type="button" class="btn btn-outline-danger waves-effect waves-red">Danger</button>
                     </li>
                     <li><button type="button" class="btn btn-outline-warning waves-effect waves-yellow">Warning</button></li>
                     <li><button type="button" class="btn btn-outline-light waves-effect waves-primary">Light</button>
                     </li>
                     <li><button type="button" class="btn btn-link waves-effect waves-primary">Link</button>
                     </li>
                     <li>
                         <div class="btn-group" role="group">
                             <button type="button" class="btn btn-primary waves-effect waves-primary">Left</button>
                             <button type="button" class="btn btn-primary waves-effect waves-primary">Middle</button>
                             <button type="button" class="btn btn-primary waves-effect waves-primary">Right</button>
                         </div>
                     </li>
                 </ul>
                 <hr class="border-dashed my-4">
                 <h6 class="mb-4">Button with icon</h6>
                 <ul class="buuton-group">
                     <li><button type="button" class="btn btn-primary waves-effect waves-primary"><i class="la la-pencil-square-o mr-2"></i>Compose</button></li>
                     <li><button type="button" class="btn btn-warning waves-effect waves-yellow"><i class="la la-info-circle mr-2"></i>Warning</button></li>
                     <li><button type="button" class="btn btn-secondary waves-effect waves-light"><i class="la la-map-marker mr-2"></i>Location</button></li>
                     <li>
                         <button class="btn btn-danger waves-effect waves-red" type="button">
                             <span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>
                             Loading
                         </button>
                     </li>
                 </ul>
             </div>
         </div>
         <!-- End UI Button -->

         <!-- Form Elements -->
         <div class="card  border-0">
             <div class="card-header py-4">
                 <h5 class="text-secondary font-weight-bold mb-0">Form Elements</h5>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12 col-md-6 col-lg-3">
                         <h6 class="mb-4">Basic Input</h6>
                         <div class="form-group">
                             <label>Height 36px</label>
                             <input type="text" class="form-control bg-light" placeholder="Write here">
                         </div>
                         <div class="form-group">
                             <label>Height 42px</label>
                             <input type="text" class="form-control bg-light input-h-42" placeholder="Write here">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control border-light" placeholder="Typin">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control border-light" placeholder="Filed Data">
                         </div>
                         <div class="form-group">
                             <div class="input-group bg-light">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text la la-user" id="Name"></span>
                                 </div>
                                 <input type="text" class="form-control pl-1" placeholder="Name" aria-label="Name" aria-describedby="Name">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="input-group bg-light">
                                 <input type="text" class="form-control" placeholder="Name" aria-label="Name2" aria-describedby="Name">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text la la-info-circle" id="Name2"></span>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-6">
                         <h6 class="mb-4">Basic Input Type 2</h6>
                         <div class="row">
                             <div class="col-12 col-md-6">
                                 <div class="form-group">
                                     <label>Label<span class="text-danger">*</span></label>
                                     <input type="text" class="form-control bg-light" placeholder="Write here">
                                 </div>
                                 <div class="form-group">
                                     <label>Label<span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border-light" placeholder="Typin">
                                 </div>
                                 <div class="form-group">
                                     <label>Label<span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border-light" placeholder="Filed">
                                 </div>
                             </div>
                             <div class="col-12 col-md-6">
                                 <div class="form-group">
                                     <label>Label<span class="text-danger">*</span></label>
                                     <input type="text" class="form-control bg-light" placeholder="Filed">
                                     <div class="form-control-feedback">This is dummy text</div>
                                 </div>
                                 <div class="form-group">
                                     <label>Label<span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border-danger" placeholder="Filed">
                                     <div class="form-control-feedback text-danger"><i class="la la-info-circle mr-2"></i>This is error text</div>
                                 </div>
                                 <div class="form-group">
                                     <label>Label<span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border-success" placeholder="Filed">
                                     <div class="form-control-feedback text-success"><i class="la la-check-circle mr-2"></i>Succeed text</div>
                                 </div>
                                 <div class="form-group">
                                     <label>Label<span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border-warning" placeholder="Filed">
                                     <div class="form-control-feedback text-warning"><i class="la la-exclamation-triangle mr-2"></i>Warning text</div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-3">
                         <h6 class="mb-4">Basic Textarea</h6>
                         <div class="form-group">
                             <textarea class="form-control bg-light" rows="3"></textarea>
                         </div>
                         <div class="form-group">
                             <label>Textarea</label>
                             <textarea class="form-control border-light" rows="3"></textarea>
                         </div>
                         <div class="form-group">
                             <label>Textarea<span class="text-danger">*</span></label>
                             <textarea class="form-control border-danger" rows="3"></textarea>
                         </div>
                     </div>
                 </div>
                 <hr class="border-dashed">
                 <h6 class="mb-4 mt-4">Dropdown</h6>
                 <div class="row">
                     <div class="col-12 col-md-6 col-lg-3">
                         <select class="selectpicker" data-style="border-theme">
                             <option>Dropdown</option>
                             <option>Dropdown open</option>
                             <option>Dropdown on hover</option>
                         </select>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End Form Elements -->

         <!-- Data Table -->
         <div class="row my-5">
             <div class="col-12 col-lg-6">
                 <div class="card  border-0">
                     <div class="card-header py-4">
                         <h5 class="text-secondary font-weight-bold mb-0">Data Table</h5>
                     </div>
                     <div class="card-body">
                         <table id="datatable1" class="table table-striped table-borderless w-100">
                             <thead class="table-theme-bg">
                                 <tr>
                                     <th>Name</th>
                                     <th>Total Products</th>
                                     <th class="text-center no-sorting">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Arts & Crafts</td>
                                     <td>1193</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Automotive</td>
                                     <td>1176</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Arts & Crafts</td>
                                     <td>1193</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Automotive</td>
                                     <td>1176</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton8">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton9">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <div class="col-12 col-lg-6">
                 <div class="card  border-0">
                     <div class="card-header py-4">
                         <h5 class="text-secondary font-weight-bold mb-0">Data Table</h5>
                     </div>
                     <div class="card-body">
                         <table id="datatable2" class="table table-striped table-borderless w-100">
                             <thead class="table-theme-bg">
                                 <tr>
                                     <th>Name</th>
                                     <th>Total Products</th>
                                     <th class="text-center no-sorting">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Arts & Crafts</td>
                                     <td>1193</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Automotive</td>
                                     <td>1176</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton12">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton13">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton14">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton15">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton16">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Arts & Crafts</td>
                                     <td>1193</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton17" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton17">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Automotive</td>
                                     <td>1176</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton18">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Baby</td>
                                     <td>1045</td>
                                     <td align="center">
                                         <div class="dropdown">
                                             <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton19">
                                                 <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
                                                     Details</a>
                                                 <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End Data Table -->

         <!-- Other Elements -->
         <div class="card  border-0">
             <div class="card-header py-4">
                 <h5 class="text-secondary font-weight-bold mb-0">Other Elements</h5>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                         <div class="ms-process mb-5" id="process-tab">
                             <ul class="nav nav-tabs process-model justify-content-center mb-3" role="tablist">
                                 <li role="presentation" class="active">
                                     <a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">1</a>
                                 </li>
                                 <li role="presentation">
                                     <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2</a>
                                 </li>
                                 <li role="presentation">
                                     <a href="#about" aria-controls="about" role="tab" data-toggle="tab">3</a>
                                 </li>
                                 <li role="presentation">
                                     <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">4</a>
                                 </li>
                             </ul>
                             <!-- end design process steps-->
                             <!-- Tab panes -->
                             <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane active" id="home">
                                     <div class="ms-process-content">
                                         <form action="" method="POST" class="row">
                                             <div class="form-group col-12 col-md-6">
                                                 <label>First Name<span class="text-danger">*</span></label>
                                                 <input type="text" class="form-control border-light" placeholder="First Name" required>
                                             </div>
                                             <div class="form-group col-12 col-md-6">
                                                 <label>Last Name<span class="text-danger">*</span></label>
                                                 <input type="text" class="form-control border-light" placeholder="Last Name" required>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane" id="profile">
                                     <div class="ms-process-content">
                                         <h3 class="semi-bold">Profile</h3>
                                     </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane" id="about">
                                     <div class="ms-process-content">
                                         <h3 class="semi-bold">About</h3>
                                     </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane" id="contact">
                                     <div class="ms-process-content">
                                         <h3 class="semi-bold">Contact</h3>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="progress mb-5">
                             <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated progress-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                 <div class="progress-value progress-value-top">80%</div>
                             </div>
                         </div>
                         <div class="progress mb-5">
                             <div class="progress-bar progress-bar-striped bg-success progress-bar-animated progress-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                 <div class="progress-value progress-value-top">40%</div>
                             </div>
                         </div>
                         <div class="progress mb-5">
                             <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated progress-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                 <div class="progress-value progress-value-top">80%</div>
                             </div>
                         </div>
                         <div class="progress">
                             <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated progress-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                 <div class="progress-value progress-value-top">80%</div>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-lg-6 offset-lg-1">
                         <h6 class="mb-3">Default Tooltip</h6>
                         <ul class="mb-5 row">
                             <li class="col-6 col-lg-3">
                                 <a data-toggle="tooltip" data-placement="top" title="Tooltip Top">
                                     Tooltip Top <i class="la la-info-circle"></i></a>
                             </li>
                             <li class="col-6 col-lg-3">
                                 <a data-toggle="tooltip" data-placement="right" title="Tooltip Right">
                                     Tooltip Right <i class="la la-info-circle"></i></a>
                             </li>
                             <li class="col-6 col-lg-3">
                                 <a data-toggle="tooltip" data-placement="bottom" title="Tooltip Bottom">
                                     Tooltip Bottom <i class="la la-info-circle"></i></a>
                             </li>
                             <li class="col-6 col-lg-3">
                                 <a data-toggle="tooltip" data-placement="left" title="Tooltip Left">
                                     Tooltip Left <i class="la la-info-circle"></i></a>
                             </li>
                         </ul>
                         <h6 class="mb-3">Colorful Tooltip</h6>
                         <ul class="mb-5 row">
                             <li class="col-6 col-lg-3">
                                 <a data-custom-class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="Tooltip Top Primary" class="text-primary">
                                     Tooltip Top <i class="la la-info-circle"></i></a>
                             </li>
                             <li class="col-6 col-lg-3">
                                 <a data-custom-class="tooltip-success" data-toggle="tooltip" data-placement="right" title="Tooltip Right Success" class="text-success">
                                     Tooltip Right <i class="la la-info-circle"></i></a>
                             </li>
                             <li class="col-6 col-lg-3">
                                 <a data-custom-class="tooltip-danger" data-toggle="tooltip" data-placement="bottom" title="Tooltip Bottom Danger" class="text-danger">
                                     Tooltip Bottom <i class="la la-info-circle"></i></a>
                             </li>
                             <li class="col-6 col-lg-3">
                                 <a data-custom-class="tooltip-warning" data-toggle="tooltip" data-placement="right" title="Tooltip Left Warning" class="text-warning">
                                     Tooltip Left <i class="la la-info-circle"></i></a>
                             </li>
                         </ul>
                         <div class="row">
                             <div class="col-12 col-lg-6">
                                 <div class="slider-wrapper slider-primary my-5">
                                     <input class="input-range" data-slider-id='ex1Slider' data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" />
                                 </div>
                                 <div class="slider-wrapper slider-success my-5">
                                     <input class="input-range" data-slider-id='ex2Slider' data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50" />
                                 </div>
                                 <div class="slider-wrapper slider-warning my-5">
                                     <input class="input-range" data-slider-id='ex3Slider' data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="90" />
                                 </div>
                                 <div class="slider-wrapper slider-danger my-5">
                                     <input class="input-range" data-slider-id='ex4Slider' data-slider-value="40, 70" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" />
                                 </div>
                             </div>
                             <div class="col-12 col-lg-6">
                                 <div class="slider-range slider-primary my-5">
                                     <input class="input-range" data-slider-id='ex5Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" data-slider-handle="square" />
                                 </div>
                                 <div class="slider-range slider-success my-5">
                                     <input class="input-range" data-slider-id='ex6Slider' type="text" data-slider-tooltip="always" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-handle="square" />
                                 </div>
                                 <div class="slider-range slider-warning my-5">
                                     <input class="input-range" data-slider-id='ex7Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="60" data-slider-handle="square" />
                                 </div>
                                 <div class="slider-range slider-danger my-5">
                                     <input class="input-range" data-slider-id='ex8Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40, 80" data-slider-handle="square" />
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End Other Elements -->
         <!----======= End UI Elememnts =======---->
     </div>

 </section>
 <!-- ########## END: MAIN PANEL ########## -->

 </body>

 <script src="../../public/css/assets/scripts/jquery.min.js"></script>
 <script src="../../public/css/assets/scripts/popper.min.js"></script>
 <script src="../../public/css/assets/scripts/bootstrap-slider.min.js"></script>
 <script src="../../public/css/assets/scripts/bootstrap.min.js"></script>
 <script src="../../public/css/assets/scripts/bootstrap.bundle.min.js"></script>
 <script src="../../public/css/assets/scripts/bootstrap-select.min.js"></script>
 <script src="../../public/css/assets/scripts/bootstrap-tooltip-custom-class.js"></script>
 <script src="../../public/css/assets/scripts/jquery.mCustomScrollbar.js"></script>
 <script src="../../public/css/assets/scripts/Chart.min.js"></script>
 <script src="../../public/css/assets/scripts/dashboard.js"></script>
 <script src="../../public/css/assets/scripts/datatables.min.js"></script>
 <script src="../../public/css/assets/scripts/ripple.min.js"></script>
 <script src="../../public/css/assets/scripts/custome.js"></script>

 </html>