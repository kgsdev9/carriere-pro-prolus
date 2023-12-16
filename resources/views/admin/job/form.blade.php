
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <label class="block text-sm">
      <span class="text-gray-700 dark:text-gray-400">Titre </span>
      <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Développeur fullstack" wire:model="title">
    </label>

    <label class="block mt-4 text-sm">
      <span class="text-gray-700 dark:text-gray-400">
        Selectionner une catégorie
      </span>
      <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
        <option>$1,000</option>
        <option>$5,000</option>
        <option>$10,000</option>
        <option>$25,000</option>
      </select>
    </label>


    <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Selectionner une catégorie
        </span>
        <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
          <option>$1,000</option>
          <option>$5,000</option>
          <option>$10,000</option>
          <option>$25,000</option>
        </select>
      </label>


      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Selectionner une catégorie
        </span>
        <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
          <option>$1,000</option>
          <option>$5,000</option>
          <option>$10,000</option>
          <option>$25,000</option>
        </select>
      </label>


      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Selectionner une catégorie
        </span>
        <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
          <option>$1,000</option>
          <option>$5,000</option>
          <option>$10,000</option>
          <option>$25,000</option>
        </select>
      </label>

    <label class="block mt-4 text-sm">
      <span class="text-gray-700 dark:text-gray-400">
        Multiselect
      </span>
      <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" multiple="">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
        <option>Option 4</option>
        <option>Option 5</option>
      </select>
    </label>

    <label class="block mt-4 text-sm">
      <span class="text-gray-700 dark:text-gray-400">Message</span>
      <div wire:ignore>
        <textarea wire:model="message" class="min-h-fit h-48 " name="message" id="message"></textarea>
     </div>
    </label>

    <div class="flex mt-6 text-sm">
      <label class="flex items-center dark:text-gray-400">
        <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
        <span class="ml-2">
          I agree to the
          <span class="underline">privacy policy</span>
        </span>
      </label>
    </div>

    @push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#message'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                @this.set('message', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
  </div>
