
   <section class="search-and-user">
     {{-- <form>
       <input type="search" placeholder="Search Pages...">
       <button type="submit" aria-label="submit form">
         <svg aria-hidden="true">
           <use xlink:href="#search"></use>
         </svg>
       </button>
     </form> --}}
     <div class="admin-profile ml-auto">
       <span class="greeting">Hola {{auth()->user()->name}}</span>
       <div class="notifications">
         <span class="badge">1</span>
         <svg>
           <use xlink:href="#users"></use>
         </svg>
       </div>
     </div>
