<x-app-layout>
    <div class="mx-4">
        <div
            class="bg-gray-50 dark:bg-gray-800 p-10 rounded-md shadow-md max-w-lg lg:max-w-4xl mx-auto mt-12"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Register A Platinum
                </h2>
                <p class="mb-4">Fill in a platinum details</p>
            </header>

            <form method="POST" action="{{ route('users.store') }}" class="grid grid-cols-2 gap-2"
            enctype="multipart/form-data" x-data="{ show: true }">
                @csrf
                <div class="mb-6 col-span-2">
                    <label for="registration_type" class="block text-lg mb-2">Type Of Registration</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="registration_type">
                        <option disabled {{ old('registration_type') == '' ? 'selected' : '' }}>select</option>
                        <option value="New" {{ old('registration_type') == 'New' ? 'selected' : '' }}>New</option>
                        <option value="Renewal" {{ old('registration_type') == 'Renewal' ? 'selected' : '' }}>Renewal</option>
                        <option value="Upgrade(Premier)" {{ old('registration_type') == 'Upgrade(Premier)' ? 'selected' : '' }}>Upgrade(Premier)</option>
                        <option value="Downgrade(Elite)" {{ old('registration_type') == 'Downgrade(Elite)' ? 'selected' : '' }}>Downgrade(Elite)</option>
                        <option value="Ala Carte" {{ old('registration_type') == 'Ala Carte' ? 'selected' : '' }}>Ala Carte</option>
                    </select>
                    @error('registration_type')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Platinum Information
                    </h2>
                </div>                          
                <div class="mb-6">
                    <label for="title" class="block text-lg mb-2">Title</label>
                    <input value="{{ old('title') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="title" placeholder="Example: Master"/>
                    @error('title')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="name" class="block text-lg mb-2">Full Name</label>
                    <input value="{{ old('name') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="name" placeholder="Example: Abu Bakar Omar"/>
                    @error('name')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="identity_card" class="block text-lg mb-2">Identity Card No.</label>
                    <input value="{{ old('identity_card') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="identity_card" placeholder="Example: 101112068764"/>
                    @error('identity_card')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="gender" class="block text-lg mb-2">Gender</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="gender">
                        <option disabled {{ old('gender') == '' ? 'selected' : '' }}>select</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    </select>
                    @error('gender')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="religion" class="block text-lg mb-2">Religion</label>
                    <input value="{{ old('religion') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="religion" placeholder="Example: Islam"/>
                    @error('religion')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="race" class="block text-lg mb-2">Race</label>
                    <input value="{{ old('race') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="race" placeholder="Example: Malay"/>
                    @error('race')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="citizenship" class="block text-lg mb-2">Citizenship</label>
                    <input value="{{ old('citizenship') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="citizenship" placeholder="Example: Malaysian"/>
                    @error('citizenship')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 col-span-2">
                    <label for="profile_photo" class="block text-lg mb-2">Profile Photo</label>
                    <input type="file" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="profile_photo"/>
                    @error('profile_photo')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Communication Information
                    </h2>
                </div>
                <div class="mb-6 col-span-2">
                    <label for="address" class="block text-lg mb-2">Address</label>
                    <input value="{{ old('address') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="address" placeholder="Example: No 1, Jalan Stream 1, Taman Sea"/>
                    @error('address')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="city" class="block text-lg mb-2">City</label>
                    <input value="{{ old('city') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="city" placeholder="Example: Pekan"/>
                    @error('city')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="state" class="block text-lg mb-2">State / Province / Region</label>
                    <input value="{{ old('state') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="state" placeholder="Example: Pahang"/>
                    @error('state')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="postcode" class="block text-lg mb-2">ZIP / Postal Code</label>
                    <input value="{{ old('postcode') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="postcode" placeholder="Example: 26600"/>
                    @error('postcode')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="country" class="block text-lg mb-2">Country</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="country">
                        <option disabled {{ old('country') == "" ? "selected" : "" }}>select</option>
                        <option value="Afghanistan" {{ old('country') == "Afghanistan" ? "selected" : "" }}>Afghanistan</option>
                        <option value="Albania" {{ old('country') == "Albania" ? "selected" : "" }}>Albania</option>
                        <option value="Algeria" {{ old('country') == "Algeria" ? "selected" : "" }}>Algeria</option>
                        <option value="American Samoa" {{ old('country') == "American Samoa" ? "selected" : "" }}>American Samoa</option>
                        <option value="Andorra" {{ old('country') == "Andorra" ? "selected" : "" }}>Andorra</option>
                        <option value="Angola" {{ old('country') == "Angola" ? "selected" : "" }}>Angola</option>
                        <option value="Anguilla" {{ old('country') == "Anguilla" ? "selected" : "" }}>Anguilla</option>
                        <option value="Antarctica" {{ old('country') == "Antarctica" ? "selected" : "" }}>Antarctica</option>
                        <option value="Antigua and Barbuda" {{ old('country') == "Antigua and Barbuda" ? "selected" : "" }}>Antigua and Barbuda</option>
                        <option value="Argentina" {{ old('country') == "Argentina" ? "selected" : "" }}>Argentina</option>
                        <option value="Armenia" {{ old('country') == "Armenia" ? "selected" : "" }}>Armenia</option>
                        <option value="Aruba" {{ old('country') == "Aruba" ? "selected" : "" }}>Aruba</option>
                        <option value="Australia" {{ old('country') == "Australia" ? "selected" : "" }}>Australia</option>
                        <option value="Austria" {{ old('country') == "Austria" ? "selected" : "" }}>Austria</option>
                        <option value="Azerbaijan" {{ old('country') == "Azerbaijan" ? "selected" : "" }}>Azerbaijan</option>
                        <option value="Bahamas" {{ old('country') == "Bahamas" ? "selected" : "" }}>Bahamas</option>
                        <option value="Bahrain" {{ old('country') == "Bahrain" ? "selected" : "" }}>Bahrain</option>
                        <option value="Bangladesh" {{ old('country') == "Bangladesh" ? "selected" : "" }}>Bangladesh</option>
                        <option value="Barbados" {{ old('country') == "Barbados" ? "selected" : "" }}>Barbados</option>
                        <option value="Belarus" {{ old('country') == "Belarus" ? "selected" : "" }}>Belarus</option>
                        <option value="Belgium" {{ old('country') == "Belgium" ? "selected" : "" }}>Belgium</option>
                        <option value="Belize" {{ old('country') == "Belize" ? "selected" : "" }}>Belize</option>
                        <option value="Benin" {{ old('country') == "Benin" ? "selected" : "" }}>Benin</option>
                        <option value="Bermuda" {{ old('country') == "Bermuda" ? "selected" : "" }}>Bermuda</option>
                        <option value="Bhutan" {{ old('country') == "Bhutan" ? "selected" : "" }}>Bhutan</option>
                        <option value="Bolivia" {{ old('country') == "Bolivia" ? "selected" : "" }}>Bolivia</option>
                        <option value="Bonaire, Sint Eustatius and Saba" {{ old('country') == "Bonaire, Sint Eustatius and Saba" ? "selected" : "" }}>Bonaire, Sint Eustatius and Saba</option>
                        <option value="Bosnia and Herzegovina" {{ old('country') == "Bosnia and Herzegovina" ? "selected" : "" }}>Bosnia and Herzegovina</option>
                        <option value="Botswana" {{ old('country') == "Botswana" ? "selected" : "" }}>Botswana</option>
                        <option value="Bouvet Island" {{ old('country') == "Bouvet Island" ? "selected" : "" }}>Bouvet Island</option>
                        <option value="Brazil" {{ old('country') == "Brazil" ? "selected" : "" }}>Brazil</option>
                        <option value="British Indian Ocean Territory" {{ old('country') == "British Indian Ocean Territory" ? "selected" : "" }}>British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam" {{ old('country') == "Brunei Darussalam" ? "selected" : "" }}>Brunei Darussalam</option>
                        <option value="Bulgaria" {{ old('country') == "Bulgaria" ? "selected" : "" }}>Bulgaria</option>
                        <option value="Burkina Faso" {{ old('country') == "Burkina Faso" ? "selected" : "" }}>Burkina Faso</option>
                        <option value="Burundi" {{ old('country') == "Burundi" ? "selected" : "" }}>Burundi</option>
                        <option value="Cabo Verde" {{ old('country') == "Cabo Verde" ? "selected" : "" }}>Cabo Verde</option>
                        <option value="Cambodia" {{ old('country') == "Cambodia" ? "selected" : "" }}>Cambodia</option>
                        <option value="Cameroon" {{ old('country') == "Cameroon" ? "selected" : "" }}>Cameroon</option>
                        <option value="Canada" {{ old('country') == "Canada" ? "selected" : "" }}>Canada</option>
                        <option value="Cayman Islands" {{ old('country') == "Cayman Islands" ? "selected" : "" }}>Cayman Islands</option>
                        <option value="Central African Republic" {{ old('country') == "Central African Republic" ? "selected" : "" }}>Central African Republic</option>
                        <option value="Chad" {{ old('country') == "Chad" ? "selected" : "" }}>Chad</option>
                        <option value="Chile" {{ old('country') == "Chile" ? "selected" : "" }}>Chile</option>
                        <option value="China" {{ old('country') == "China" ? "selected" : "" }}>China</option>
                        <option value="Christmas Island" {{ old('country') == "Christmas Island" ? "selected" : "" }}>Christmas Island</option>
                        <option value="Cocos Islands" {{ old('country') == "Cocos Islands" ? "selected" : "" }}>Cocos Islands</option>
                        <option value="Colombia" {{ old('country') == "Colombia" ? "selected" : "" }}>Colombia</option>
                        <option value="Comoros" {{ old('country') == "Comoros" ? "selected" : "" }}>Comoros</option>
                        <option value="Congo" {{ old('country') == "Congo" ? "selected" : "" }}>Congo</option>
                        <option value="Congo, Democratic Republic of the" {{ old('country') == "Congo, Democratic Republic of the" ? "selected" : "" }}>Congo, Democratic Republic of the</option>
                        <option value="Cook Islands" {{ old('country') == "Cook Islands" ? "selected" : "" }}>Cook Islands</option>
                        <option value="Costa Rica" {{ old('country') == "Costa Rica" ? "selected" : "" }}>Costa Rica</option>
                        <option value="Croatia" {{ old('country') == "Croatia" ? "selected" : "" }}>Croatia</option>
                        <option value="Cuba" {{ old('country') == "Cuba" ? "selected" : "" }}>Cuba</option>
                        <option value="Curaçao" {{ old('country') == "Curaçao" ? "selected" : "" }}>Curaçao</option>
                        <option value="Cyprus" {{ old('country') == "Cyprus" ? "selected" : "" }}>Cyprus</option>
                        <option value="Czechia" {{ old('country') == "Czechia" ? "selected" : "" }}>Czechia</option>
                        <option value="Côte d'Ivoire" {{ old('country') == "Côte d'Ivoire" ? "selected" : "" }}>Côte d'Ivoire</option>
                        <option value="Denmark" {{ old('country') == "Denmark" ? "selected" : "" }}>Denmark</option>
                        <option value="Djibouti" {{ old('country') == "Djibouti" ? "selected" : "" }}>Djibouti</option>
                        <option value="Dominica" {{ old('country') == "Dominica" ? "selected" : "" }}>Dominica</option>
                        <option value="Dominican Republic" {{ old('country') == "Dominican Republic" ? "selected" : "" }}>Dominican Republic</option>
                        <option value="Ecuador" {{ old('country') == "Ecuador" ? "selected" : "" }}>Ecuador</option>
                        <option value="Egypt" {{ old('country') == "Egypt" ? "selected" : "" }}>Egypt</option>
                        <option value="El Salvador" {{ old('country') == "El Salvador" ? "selected" : "" }}>El Salvador</option>
                        <option value="Equatorial Guinea" {{ old('country') == "Equatorial Guinea" ? "selected" : "" }}>Equatorial Guinea</option>
                        <option value="Eritrea" {{ old('country') == "Eritrea" ? "selected" : "" }}>Eritrea</option>
                        <option value="Estonia" {{ old('country') == "Estonia" ? "selected" : "" }}>Estonia</option>
                        <option value="Eswatini" {{ old('country') == "Eswatini" ? "selected" : "" }}>Eswatini</option>
                        <option value="Ethiopia" {{ old('country') == "Ethiopia" ? "selected" : "" }}>Ethiopia</option>
                        <option value="Falkland Islands" {{ old('country') == "Falkland Islands" ? "selected" : "" }}>Falkland Islands</option>
                        <option value="Faroe Islands" {{ old('country') == "Faroe Islands" ? "selected" : "" }}>Faroe Islands</option>
                        <option value="Fiji" {{ old('country') == "Fiji" ? "selected" : "" }}>Fiji</option>
                        <option value="Finland" {{ old('country') == "Finland" ? "selected" : "" }}>Finland</option>
                        <option value="France" {{ old('country') == "France" ? "selected" : "" }}>France</option>
                        <option value="French Guiana" {{ old('country') == "French Guiana" ? "selected" : "" }}>French Guiana</option>
                        <option value="French Polynesia" {{ old('country') == "French Polynesia" ? "selected" : "" }}>French Polynesia</option>
                        <option value="French Southern Territories" {{ old('country') == "French Southern Territories" ? "selected" : "" }}>French Southern Territories</option>
                        <option value="Gabon" {{ old('country') == "Gabon" ? "selected" : "" }}>Gabon</option>
                        <option value="Gambia" {{ old('country') == "Gambia" ? "selected" : "" }}>Gambia</option>
                        <option value="Georgia" {{ old('country') == "Georgia" ? "selected" : "" }}>Georgia</option>
                        <option value="Germany" {{ old('country') == "Germany" ? "selected" : "" }}>Germany</option>
                        <option value="Ghana" {{ old('country') == "Ghana" ? "selected" : "" }}>Ghana</option>
                        <option value="Gibraltar" {{ old('country') == "Gibraltar" ? "selected" : "" }}>Gibraltar</option>
                        <option value="Greece" {{ old('country') == "Greece" ? "selected" : "" }}>Greece</option>
                        <option value="Greenland" {{ old('country') == "Greenland" ? "selected" : "" }}>Greenland</option>
                        <option value="Grenada" {{ old('country') == "Grenada" ? "selected" : "" }}>Grenada</option>
                        <option value="Guadeloupe" {{ old('country') == "Guadeloupe" ? "selected" : "" }}>Guadeloupe</option>
                        <option value="Guam" {{ old('country') == "Guam" ? "selected" : "" }}>Guam</option>
                        <option value="Guatemala" {{ old('country') == "Guatemala" ? "selected" : "" }}>Guatemala</option>
                        <option value="Guernsey" {{ old('country') == "Guernsey" ? "selected" : "" }}>Guernsey</option>
                        <option value="Guinea" {{ old('country') == "Guinea" ? "selected" : "" }}>Guinea</option>
                        <option value="Guinea-Bissau" {{ old('country') == "Guinea-Bissau" ? "selected" : "" }}>Guinea-Bissau</option>
                        <option value="Guyana" {{ old('country') == "Guyana" ? "selected" : "" }}>Guyana</option>
                        <option value="Haiti" {{ old('country') == "Haiti" ? "selected" : "" }}>Haiti</option>
                        <option value="Heard Island and McDonald Islands" {{ old('country') == "Heard Island and McDonald Islands" ? "selected" : "" }}>Heard Island and McDonald Islands</option>
                        <option value="Holy See" {{ old('country') == "Holy See" ? "selected" : "" }}>Holy See</option>
                        <option value="Honduras" {{ old('country') == "Honduras" ? "selected" : "" }}>Honduras</option>
                        <option value="Hong Kong" {{ old('country') == "Hong Kong" ? "selected" : "" }}>Hong Kong</option>
                        <option value="Hungary" {{ old('country') == "Hungary" ? "selected" : "" }}>Hungary</option>
                        <option value="Iceland" {{ old('country') == "Iceland" ? "selected" : "" }}>Iceland</option>
                        <option value="India" {{ old('country') == "India" ? "selected" : "" }}>India</option>
                        <option value="Indonesia" {{ old('country') == "Indonesia" ? "selected" : "" }}>Indonesia</option>
                        <option value="Iran" {{ old('country') == "Iran" ? "selected" : "" }}>Iran</option>
                        <option value="Iraq" {{ old('country') == "Iraq" ? "selected" : "" }}>Iraq</option>
                        <option value="Ireland" {{ old('country') == "Ireland" ? "selected" : "" }}>Ireland</option>
                        <option value="Isle of Man" {{ old('country') == "Isle of Man" ? "selected" : "" }}>Isle of Man</option>
                        <option value="Israel" {{ old('country') == "Israel" ? "selected" : "" }}>Israel</option>
                        <option value="Italy" {{ old('country') == "Italy" ? "selected" : "" }}>Italy</option>
                        <option value="Jamaica" {{ old('country') == "Jamaica" ? "selected" : "" }}>Jamaica</option>
                        <option value="Japan" {{ old('country') == "Japan" ? "selected" : "" }}>Japan</option>
                        <option value="Jersey" {{ old('country') == "Jersey" ? "selected" : "" }}>Jersey</option>
                        <option value="Jordan" {{ old('country') == "Jordan" ? "selected" : "" }}>Jordan</option>
                        <option value="Kazakhstan" {{ old('country') == "Kazakhstan" ? "selected" : "" }}>Kazakhstan</option>
                        <option value="Kenya" {{ old('country') == "Kenya" ? "selected" : "" }}>Kenya</option>
                        <option value="Kiribati" {{ old('country') == "Kiribati" ? "selected" : "" }}>Kiribati</option>
                        <option value="Korea, Democratic People's Republic of" {{ old('country') == "Korea, Democratic People's Republic of" ? "selected" : "" }}>Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of" {{ old('country') == "Korea, Republic of" ? "selected" : "" }}>Korea, Republic of</option>
                        <option value="Kuwait" {{ old('country') == "Kuwait" ? "selected" : "" }}>Kuwait</option>
                        <option value="Kyrgyzstan" {{ old('country') == "Kyrgyzstan" ? "selected" : "" }}>Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic" {{ old('country') == "Lao People's Democratic Republic" ? "selected" : "" }}>Lao People's Democratic Republic</option>
                        <option value="Latvia" {{ old('country') == "Latvia" ? "selected" : "" }}>Latvia</option>
                        <option value="Lebanon" {{ old('country') == "Lebanon" ? "selected" : "" }}>Lebanon</option>
                        <option value="Lesotho" {{ old('country') == "Lesotho" ? "selected" : "" }}>Lesotho</option>
                        <option value="Liberia" {{ old('country') == "Liberia" ? "selected" : "" }}>Liberia</option>
                        <option value="Libya" {{ old('country') == "Libya" ? "selected" : "" }}>Libya</option>
                        <option value="Liechtenstein" {{ old('country') == "Liechtenstein" ? "selected" : "" }}>Liechtenstein</option>
                        <option value="Lithuania" {{ old('country') == "Lithuania" ? "selected" : "" }}>Lithuania</option>
                        <option value="Luxembourg" {{ old('country') == "Luxembourg" ? "selected" : "" }}>Luxembourg</option>
                        <option value="Macao" {{ old('country') == "Macao" ? "selected" : "" }}>Macao</option>
                        <option value="Madagascar" {{ old('country') == "Madagascar" ? "selected" : "" }}>Madagascar</option>
                        <option value="Malawi" {{ old('country') == "Malawi" ? "selected" : "" }}>Malawi</option>
                        <option value="Malaysia" {{ old('country') == "Malaysia" ? "selected" : "" }}>Malaysia</option>
                        <option value="Maldives" {{ old('country') == "Maldives" ? "selected" : "" }}>Maldives</option>
                        <option value="Mali" {{ old('country') == "Mali" ? "selected" : "" }}>Mali</option>
                        <option value="Malta" {{ old('country') == "Malta" ? "selected" : "" }}>Malta</option>
                        <option value="Marshall Islands" {{ old('country') == "Marshall Islands" ? "selected" : "" }}>Marshall Islands</option>
                        <option value="Martinique" {{ old('country') == "Martinique" ? "selected" : "" }}>Martinique</option>
                        <option value="Mauritania" {{ old('country') == "Mauritania" ? "selected" : "" }}>Mauritania</option>
                        <option value="Mauritius" {{ old('country') == "Mauritius" ? "selected" : "" }}>Mauritius</option>
                        <option value="Mayotte" {{ old('country') == "Mayotte" ? "selected" : "" }}>Mayotte</option>
                        <option value="Mexico" {{ old('country') == "Mexico" ? "selected" : "" }}>Mexico</option>
                        <option value="Micronesia" {{ old('country') == "Micronesia" ? "selected" : "" }}>Micronesia</option>
                        <option value="Moldova" {{ old('country') == "Moldova" ? "selected" : "" }}>Moldova</option>
                        <option value="Monaco" {{ old('country') == "Monaco" ? "selected" : "" }}>Monaco</option>
                        <option value="Mongolia" {{ old('country') == "Mongolia" ? "selected" : "" }}>Mongolia</option>
                        <option value="Montenegro" {{ old('country') == "Montenegro" ? "selected" : "" }}>Montenegro</option>
                        <option value="Montserrat" {{ old('country') == "Montserrat" ? "selected" : "" }}>Montserrat</option>
                        <option value="Morocco" {{ old('country') == "Morocco" ? "selected" : "" }}>Morocco</option>
                        <option value="Mozambique" {{ old('country') == "Mozambique" ? "selected" : "" }}>Mozambique</option>
                        <option value="Myanmar" {{ old('country') == "Myanmar" ? "selected" : "" }}>Myanmar</option>
                        <option value="Namibia" {{ old('country') == "Namibia" ? "selected" : "" }}>Namibia</option>
                        <option value="Nauru" {{ old('country') == "Nauru" ? "selected" : "" }}>Nauru</option>
                        <option value="Nepal" {{ old('country') == "Nepal" ? "selected" : "" }}>Nepal</option>
                        <option value="Netherlands" {{ old('country') == "Netherlands" ? "selected" : "" }}>Netherlands</option>
                        <option value="New Caledonia" {{ old('country') == "New Caledonia" ? "selected" : "" }}>New Caledonia</option>
                        <option value="New Zealand" {{ old('country') == "New Zealand" ? "selected" : "" }}>New Zealand</option>
                        <option value="Nicaragua" {{ old('country') == "Nicaragua" ? "selected" : "" }}>Nicaragua</option>
                        <option value="Niger" {{ old('country') == "Niger" ? "selected" : "" }}>Niger</option>
                        <option value="Nigeria" {{ old('country') == "Nigeria" ? "selected" : "" }}>Nigeria</option>
                        <option value="Niue" {{ old('country') == "Niue" ? "selected" : "" }}>Niue</option>
                        <option value="Norfolk Island" {{ old('country') == "Norfolk Island" ? "selected" : "" }}>Norfolk Island</option>
                        <option value="North Macedonia" {{ old('country') == "North Macedonia" ? "selected" : "" }}>North Macedonia</option>
                        <option value="Northern Mariana Islands" {{ old('country') == "Northern Mariana Islands" ? "selected" : "" }}>Northern Mariana Islands</option>
                        <option value="Norway" {{ old('country') == "Norway" ? "selected" : "" }}>Norway</option>
                        <option value="Oman" {{ old('country') == "Oman" ? "selected" : "" }}>Oman</option>
                        <option value="Pakistan" {{ old('country') == "Pakistan" ? "selected" : "" }}>Pakistan</option>
                        <option value="Palau" {{ old('country') == "Palau" ? "selected" : "" }}>Palau</option>
                        <option value="Palestine, State of" {{ old('country') == "Palestine, State of" ? "selected" : "" }}>Palestine, State of</option>
                        <option value="Panama" {{ old('country') == "Panama" ? "selected" : "" }}>Panama</option>
                        <option value="Papua New Guinea" {{ old('country') == "Papua New Guinea" ? "selected" : "" }}>Papua New Guinea</option>
                        <option value="Paraguay" {{ old('country') == "Paraguay" ? "selected" : "" }}>Paraguay</option>
                        <option value="Peru" {{ old('country') == "Peru" ? "selected" : "" }}>Peru</option>
                        <option value="Philippines" {{ old('country') == "Philippines" ? "selected" : "" }}>Philippines</option>
                        <option value="Pitcairn" {{ old('country') == "Pitcairn" ? "selected" : "" }}>Pitcairn</option>
                        <option value="Poland" {{ old('country') == "Poland" ? "selected" : "" }}>Poland</option>
                        <option value="Portugal" {{ old('country') == "Portugal" ? "selected" : "" }}>Portugal</option>
                        <option value="Puerto Rico" {{ old('country') == "Puerto Rico" ? "selected" : "" }}>Puerto Rico</option>
                        <option value="Qatar" {{ old('country') == "Qatar" ? "selected" : "" }}>Qatar</option>
                        <option value="Romania" {{ old('country') == "Romania" ? "selected" : "" }}>Romania</option>
                        <option value="Russian Federation" {{ old('country') == "Russian Federation" ? "selected" : "" }}>Russian Federation</option>
                        <option value="Rwanda" {{ old('country') == "Rwanda" ? "selected" : "" }}>Rwanda</option>
                        <option value="Réunion" {{ old('country') == "Réunion" ? "selected" : "" }}>Réunion</option>
                        <option value="Saint Barthélemy" {{ old('country') == "Saint Barthélemy" ? "selected" : "" }}>Saint Barthélemy</option>
                        <option value="Saint Helena, Ascension and Tristan da Cunha" {{ old('country') == "Saint Helena, Ascension and Tristan da Cunha" ? "selected" : "" }}>Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="Saint Kitts and Nevis" {{ old('country') == "Saint Kitts and Nevis" ? "selected" : "" }}>Saint Kitts and Nevis</option>
                        <option value="Saint Lucia" {{ old('country') == "Saint Lucia" ? "selected" : "" }}>Saint Lucia</option>
                        <option value="Saint Martin" {{ old('country') == "Saint Martin" ? "selected" : "" }}>Saint Martin</option>
                        <option value="Saint Pierre and Miquelon" {{ old('country') == "Saint Pierre and Miquelon" ? "selected" : "" }}>Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and the Grenadines" {{ old('country') == "Saint Vincent and the Grenadines" ? "selected" : "" }}>Saint Vincent and the Grenadines</option>
                        <option value="Samoa" {{ old('country') == "Samoa" ? "selected" : "" }}>Samoa</option>
                        <option value="San Marino" {{ old('country') == "San Marino" ? "selected" : "" }}>San Marino</option>
                        <option value="Sao Tome and Principe" {{ old('country') == "Sao Tome and Principe" ? "selected" : "" }}>Sao Tome and Principe</option>
                        <option value="Saudi Arabia" {{ old('country') == "Saudi Arabia" ? "selected" : "" }}>Saudi Arabia</option>
                        <option value="Senegal" {{ old('country') == "Senegal" ? "selected" : "" }}>Senegal</option>
                        <option value="Serbia" {{ old('country') == "Serbia" ? "selected" : "" }}>Serbia</option>
                        <option value="Seychelles" {{ old('country') == "Seychelles" ? "selected" : "" }}>Seychelles</option>
                        <option value="Sierra Leone" {{ old('country') == "Sierra Leone" ? "selected" : "" }}>Sierra Leone</option>
                        <option value="Singapore" {{ old('country') == "Singapore" ? "selected" : "" }}>Singapore</option>
                        <option value="Sint Maarten" {{ old('country') == "Sint Maarten" ? "selected" : "" }}>Sint Maarten</option>
                        <option value="Slovakia" {{ old('country') == "Slovakia" ? "selected" : "" }}>Slovakia</option>
                        <option value="Slovenia" {{ old('country') == "Slovenia" ? "selected" : "" }}>Slovenia</option>
                        <option value="Solomon Islands" {{ old('country') == "Solomon Islands" ? "selected" : "" }}>Solomon Islands</option>
                        <option value="Somalia" {{ old('country') == "Somalia" ? "selected" : "" }}>Somalia</option>
                        <option value="South Africa" {{ old('country') == "South Africa" ? "selected" : "" }}>South Africa</option>
                        <option value="South Georgia and the South Sandwich Islands" {{ old('country') == "South Georgia and the South Sandwich Islands" ? "selected" : "" }}>South Georgia and the South Sandwich Islands</option>
                        <option value="South Sudan" {{ old('country') == "South Sudan" ? "selected" : "" }}>South Sudan</option>
                        <option value="Spain" {{ old('country') == "Spain" ? "selected" : "" }}>Spain</option>
                        <option value="Sri Lanka" {{ old('country') == "Sri Lanka" ? "selected" : "" }}>Sri Lanka</option>
                        <option value="Sudan" {{ old('country') == "Sudan" ? "selected" : "" }}>Sudan</option>
                        <option value="Suriname" {{ old('country') == "Suriname" ? "selected" : "" }}>Suriname</option>
                        <option value="Svalbard and Jan Mayen" {{ old('country') == "Svalbard and Jan Mayen" ? "selected" : "" }}>Svalbard and Jan Mayen</option>
                        <option value="Sweden" {{ old('country') == "Sweden" ? "selected" : "" }}>Sweden</option>
                        <option value="Switzerland" {{ old('country') == "Switzerland" ? "selected" : "" }}>Switzerland</option>
                        <option value="Syria Arab Republic" {{ old('country') == "Syria Arab Republic" ? "selected" : "" }}>Syria Arab Republic</option>
                        <option value="Taiwan" {{ old('country') == "Taiwan" ? "selected" : "" }}>Taiwan</option>
                        <option value="Tajikistan" {{ old('country') == "Tajikistan" ? "selected" : "" }}>Tajikistan</option>
                        <option value="Tanzania, the United Republic of" {{ old('country') == "Tanzania, the United Republic of" ? "selected" : "" }}>Tanzania, the United Republic of</option>
                        <option value="Thailand" {{ old('country') == "Thailand" ? "selected" : "" }}>Thailand</option>
                        <option value="Timor-Leste" {{ old('country') == "Timor-Leste" ? "selected" : "" }}>Timor-Leste</option>
                        <option value="Togo" {{ old('country') == "Togo" ? "selected" : "" }}>Togo</option>
                        <option value="Tokelau" {{ old('country') == "Tokelau" ? "selected" : "" }}>Tokelau</option>
                        <option value="Tonga" {{ old('country') == "Tonga" ? "selected" : "" }}>Tonga</option>
                        <option value="Trinidad and Tobago" {{ old('country') == "Trinidad and Tobago" ? "selected" : "" }}>Trinidad and Tobago</option>
                        <option value="Tunisia" {{ old('country') == "Tunisia" ? "selected" : "" }}>Tunisia</option>
                        <option value="Turkmenistan" {{ old('country') == "Turkmenistan" ? "selected" : "" }}>Turkmenistan</option>
                        <option value="Turks and Caicos Islands" {{ old('country') == "Turks and Caicos Islands" ? "selected" : "" }}>Turks and Caicos Islands</option>
                        <option value="Tuvalu" {{ old('country') == "Tuvalu" ? "selected" : "" }}>Tuvalu</option>
                        <option value="Türkiye" {{ old('country') == "Türkiye" ? "selected" : "" }}>Türkiye</option>
                        <option value="US Minor Outlying Islands" {{ old('country') == "US Minor Outlying Islands" ? "selected" : "" }}>US Minor Outlying Islands</option>
                        <option value="Uganda" {{ old('country') == "Uganda" ? "selected" : "" }}>Uganda</option>
                        <option value="Ukraine" {{ old('country') == "Ukraine" ? "selected" : "" }}>Ukraine</option>
                        <option value="United Arab Emirates" {{ old('country') == "United Arab Emirates" ? "selected" : "" }}>United Arab Emirates</option>
                        <option value="United Kingdom" {{ old('country') == "United Kingdom" ? "selected" : "" }}>United Kingdom</option>
                        <option value="United States" {{ old('country') == "United States" ? "selected" : "" }}>United States</option>
                        <option value="Uruguay" {{ old('country') == "Uruguay" ? "selected" : "" }}>Uruguay</option>
                        <option value="Uzbekistan" {{ old('country') == "Uzbekistan" ? "selected" : "" }}>Uzbekistan</option>
                        <option value="Vanuatu" {{ old('country') == "Vanuatu" ? "selected" : "" }}>Vanuatu</option>
                        <option value="Venezuela" {{ old('country') == "Venezuela" ? "selected" : "" }}>Venezuela</option>
                        <option value="Viet Nam" {{ old('country') == "Viet Nam" ? "selected" : "" }}>Viet Nam</option>
                        <option value="Virgin Islands, British" {{ old('country') == "Virgin Islands, British" ? "selected" : "" }}>Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S." {{ old('country') == "Virgin Islands, U.S." ? "selected" : "" }}>Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna" {{ old('country') == "Wallis and Futuna" ? "selected" : "" }}>Wallis and Futuna</option>
                        <option value="Western Sahara" {{ old('country') == "Western Sahara" ? "selected" : "" }}>Western Sahara</option>
                        <option value="Yemen" {{ old('country') == "Yemen" ? "selected" : "" }}>Yemen</option>
                        <option value="Zambia" {{ old('country') == "Zambia" ? "selected" : "" }}>Zambia</option>
                        <option value="Zimbabwe" {{ old('country') == "Zimbabwe" ? "selected" : "" }}>Zimbabwe</option>
                        <option value="Åland Islands" {{ old('country') == "Åland Islands" ? "selected" : "" }}>Åland Islands</option>
                    </select>
                    @error('country')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="phone" class="block text-lg mb-2">Phone No.</label>
                    <input value="{{ old('phone') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="phone" placeholder="Example: 019-7963122"/>
                    @error('phone')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-lg mb-2">Email</label>
                    <input value="{{ old('email') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="email" placeholder="Example: abubakar@email.com"/>
                    @error('email')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="facebook_name" class="block text-lg mb-2">Facebook Name</label>
                    <input value="{{ old('facebook_name') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="facebook_name" placeholder="Example: Bakar Abu"/>
                    @error('facebook_name')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Education Information
                    </h2>
                </div>
                <div class="mb-6">
                    <label for="current_level" class="block text-lg mb-2">Current Education Level</label>
                    <input value="{{ old('current_level') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="current_level" placeholder="Example: Diploma"/>
                    @error('current_level')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="field" class="block text-lg mb-2">Education Field</label>
                    <input value="{{ old('field') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="field" placeholder="Example: Electrical And Electronic Engineering"/>
                    @error('field')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="institute" class="block text-lg mb-2">Education Institute</label>
                    <input value="{{ old('institute') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="institute" placeholder="Universiti Malaysia Pahang Al-Sultan Abdullah"/>
                    @error('institute')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="occupation" class="block text-lg mb-2">Occupation</label>
                    <input value="{{ old('occupation') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="occupation" placeholder="Student"/>
                    @error('occupation')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="study_sponsorship" class="block text-lg mb-2">Study Sponsorship</label>
                    <input value="{{ old('study_sponsorship') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="study_sponsorship" placeholder="PTPTN"/>
                    @error('study_sponsorship')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Program Information
                    </h2>
                </div>   
                <div class="mb-6">
                    <label for="program_interested" class="block text-lg mb-2">Program Interested</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="program_interested">
                        <option disabled {{ old('program_interested') == '' ? 'selected' : '' }}>select</option>
                        <option value="Platinum Professorship" {{ old('program_interested') == 'Platinum Professorship' ? 'selected' : '' }}>Platinum Professorship</option>
                        <option value="Platinum Premier" {{ old('program_interested') == 'Platinum Premier' ? 'selected' : '' }}>Platinum Premier</option>
                        <option value="Platinum Elite" {{ old('program_interested') == 'Platinum Elite' ? 'selected' : '' }}>Platinum Elite</option>
                        <option value="Platinum Dr.Jr." {{ old('program_interested') == 'Platinum Dr.Jr.' ? 'selected' : '' }}>Platinum Dr.Jr.</option>
                        <option value="Ala Carte" {{ old('program_interested') == 'Ala Carte' ? 'selected' : '' }}>Ala Carte</option>
                    </select>
                    @error('program_interested')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="program_batch" class="block text-lg mb-2">Batch</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="program_batch">
                        <option disabled>select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4.1">4.1</option>
                        <option value="4.2">4.2</option>
                        <option value="4.3">4.3</option>
                        <option value="5.1">5.1</option>
                        <option value="5.2">5.2</option>
                        <option value="5.3">5.3</option>
                        <option value="6.1">6.1</option>
                        <option value="6.2">6.2</option>
                        <option value="6.3">6.3</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="16.2">16.2</option>
                        <option value="16.3">16.3</option>
                        <option value="17">17</option>
                        <option value="18.1">18.1</option>
                        <option value="18.2">18.2</option>
                        <option value="18.3">18.3</option>
                        <option value="18.4">18.4</option>
                        <option value="Other">Other</option>

                    </select>
                    @error('program_batch')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                
                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Platinum Members Only
                    </h2>
                </div>
                <div class="mb-6 col-span-2">
                    <label for="referral_exist" class="block text-lg mb-2">Do You Have A Referral?</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="referral_exist">
                        <option @click="show = true" value="yes">Yes</option>
                        <option @click="show = false" value="no">No</option>
                    </select>
                    @error('referral_exist')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6" x-show="show">
                    <label for="referral_name" class="block text-lg mb-2">Referral Name</label>
                    <input value="{{ old('referral_name') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="referral_name" placeholder="Adam Saleh"/>
                    @error('referral_name')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6" x-show="show">
                    <label for="referral_batch" class="block text-lg mb-2">Referral Batch</label>
                    <input value="{{ old('referral_batch') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="referral_batch" placeholder="1"/>
                    @error('referral_batch')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>       

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Membership Information
                    </h2>
                </div>
                <div class="mb-6 col-span-2">
                    <legend class="text-lg mb-2">Consent</legend>                          
                    <input type="checkbox" name="consent" value="1" {{ old('consent') == '1' ? 'checked' : '' }}>
                    <label for="consent" class="font-bold">I hereby confirm that the details I have filled on this application are true and valid.</label>
                    @error('consent')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="application_date" class="block text-lg mb-2">Date Of Application</label>
                    <input value="{{ old('application_date') }}" type="date" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="application_date"/>
                    @error('application_date')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 col-span-2">
                    <label for="transaction_proof" class="block text-lg mb-2">Proof Of Transaction</label>
                    <input type="file" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="transaction_proof"/>
                    @error('transaction_proof')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6 col-span-2 ml-auto">
                    <button
                        class="bg-cyan-600 text-white rounded-lg shadow-sm py-2 px-4 hover:bg-cyan-400"
                    >
                        Register
                    </button>

                    <a href="/" class="ml-4"> Back </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>