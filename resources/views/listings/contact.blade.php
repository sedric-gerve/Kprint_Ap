
<x-layout>
    <div class="p-4 mx-auto max-w-xl bg-white">
        <h2 class="text-3xl text-slate-900 font-bold">Contactez nous</h2>
        <form method="post" action="/contact" enctype="multipart/form-data" class="mt-8 space-y-5">
          @csrf
          <div>
            <label for="name" class='text-sm text-slate-900 font-medium mb-2 block'>Name</label>
            <input type='text' placeholder='Enter Name' name="name" value="{{old('name')}}"
              class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all" />
         @error('name')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
            </div>
          <div>
            <label for="email"  class='text-sm text-slate-900 font-medium mb-2 block'>Email</label>
            <input type='email' placeholder='Enter Email' name="email" enctype="multipart/form-data" value="{{old('email')}}"
              class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all" />
         @error('email')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
            </div>
          <div>
            <label  for="company" class='text-sm text-slate-900 font-medium mb-2 block'>Entreprise</label>
            <input type='text' name='company' value="{{old('company')}}" placeholder='Entreprise Name'
              class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all" />
         @error('company')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
            </div>
                   <div class="w-full max-w-sm min-w-[200px]">
  <label class="text-sm text-slate-900 font-medium mb-2 block" for="contact_number">
      Contact Number
  </label>
  <div class="relative">
    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-slate-600">
        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
      </svg>
    </span>
    <input
      id="contactNumber"
      name="contact_number"
      value="{{old('contact_number')}}"
      class="w-full py-2.5 px-8 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all"
      placeholder="e.g., +237 673 989 001"
      type="text"
      maxlength="16"
  
    />
    @error('contact_number')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
  </div>
  <p class="mt-2 text-xs text-slate-400">
    Include le code de votre pays pour les numeros international.
  </p>
</div>
 
<script>
  // Add event listener to the input field
  document.getElementById('contactNumber').addEventListener('input', function (e) {
    // Replace any non-numeric characters except +, -, and space
    e.target.value = e.target.value.replace(/[^+\d\s-]/g, '');
  });
</script>
          <div>
            <label for="message" class='text-sm text-slate-900 font-medium mb-2 block'>Message</label>
            <textarea name='message' rows="6"
              class="w-full px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm pt-3 outline-0 transition-all">{{ old('message') }}</textarea>
         @error('message')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
            </div>

          <button 
            class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
            <a href="/" class=" ml-4"> Back </a></button>
        </form>
      </div>
</x-layout>