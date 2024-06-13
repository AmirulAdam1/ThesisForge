<div class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 p-10 rounded max-w-lg 
lg:max-w-6xl mx-auto mt-24">
    <form action="" class="flex flex-col flex-wrap h-[700px] gap-4">
        <div class="flex-initial bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">
            <h2 class="text-2xl font-bold capitalize mb-4 text-center">
                {{ $user->role }} Information
            </h2>
            <div class="flex align-items-center">
                <div class="w-[120px] mr-2">
                    <img class="hidden w-full md:block rounded-lg" 
                    src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : asset('/images/no-image-available.jpg') }}" alt="">
                </div>
                <div>
                    <div class="flex align-items-center gap-4 text-lg capitalize">
                        <label for="title" class="mb-2">Title: </label>
                        <div name="title">{{ $user->platinum->title }}</div>
                    </div>
                    <div class="flex align-items-center gap-4 text-lg capitalize">
                        <label for="name" class="mb-2">Platinum Name: </label>
                        <div name="name">{{ $user->name }}</div>
                    </div>
                    <div class="flex align-items-center gap-4 text-lg capitalize">
                        <label for="identityNumber" class="mb-2">Identity Card No: </label>
                        <div name="identityNumber">{{ $user->platinum->identity_card }}</div>
                    </div>
                    <div class="flex align-items-center gap-4 text-lg capitalize">
                        <label for="gender" class="mb-2">Gender: </label>
                        <div name="gender">{{ $user->platinum->gender }}</div>
                    </div>
                    <div class="flex align-items-center gap-4 text-lg capitalize">
                        <label for="religion" class="mb-2">Religion: </label>
                        <div name="religion">{{ $user->platinum->religion }}</div>
                    </div>
                    <div class="flex align-items-center gap-4 text-lg capitalize">
                        <label for="race" class="mb-2">Race: </label>
                        <div name="race">{{ $user->platinum->race }}</div>
                    </div>
                    <div class="flex align-items-center gap-4 text-lg capitalize">
                        <label for="citizenship" class="mb-2">Citizenship: </label>
                        <div name="citizenship">{{ $user->platinum->citizenship }}</div>
                    </div>
                </div>
            </div>  
        </div>
        
        <div class="flex-inital bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">

            <h2 class="text-2xl font-bold mb-4 text-center">
                Communication Information
            </h2>        
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="address" class="mb-2">Address: </label>
                <div name="address">{{ $user->platinum->address }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="city" class="mb-2">City: </label>
                <div name="city">{{ $user->platinum->city }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="state" class="mb-2">State / Province / Region: </label>
                <div name="state">{{ $user->platinum->state }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="postcode" class="mb-2">ZIP / Postal Code: </label>
                <div name="postcode">{{ $user->platinum->postcode }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="country" class="mb-2">Country: </label>
                <div name="country">{{ $user->platinum->country }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="phone" class="mb-2">Phone No: </label>
                <div name="phone">{{ $user->phone }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg">
                <label for="email" class="mb-2">Email: </label>
                <div name="email">{{ $user->email }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="facebook_name" class="mb-2">Facebook Name: </label>
                <div name="facebook_name">{{ $user->platinum->facebook_name }}</div>
            </div>
        </div>
        
        <div class="flex-inital bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">

            <h2 class="text-2xl font-bold mb-4 text-center">
                Education Information
            </h2>        
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="education_level" class="mb-2">Current Education Level: </label>
                <div name="education_level">{{ $user->platinum->education->current_level }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="education_field" class="mb-2">Education Field: </label>
                <div name="education_field">{{ $user->platinum->education->field }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="education_institute" class="mb-2">Education Institute: </label>
                <div name="education_institute">{{ $user->platinum->education->institute }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="occupation" class="mb-2">Occupation: </label>
                <div name="occupation">{{ $user->platinum->education->occupation }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="study_sponsorship" class="mb-2">Study Sponsorship: </label>
                <div name="study_sponsorship">{{ $user->platinum->education->study_sponsorship }}</div>
            </div>
        </div>
        
        <div class="flex-inital bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">

            <h2 class="text-2xl font-bold mb-4 text-center">
                Membership Information
            </h2>
        
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="program_interested" class="mb-2">Program Interested: </label>
                <div name="program_interested">{{ $user->platinum->membership->program_interested }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="program_batch" class="mb-2">Batch: </label>
                <div name="program_batch">{{ $user->platinum->membership->program_batch }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="referral_name" class="mb-2">Referral Name: </label>
                <div name="referral_name">
                @isset($user->platinum->membership->referral_name)
                    {{ $user->platinum->membership->referral_name }}
                @endisset
                @empty($user->platinum->membership->referral_name)
                    NULL
                @endempty
                </div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="referral_batch" class="mb-2">Referral Batch: </label>
                <div name="referral_batch">
                @isset($user->platinum->membership->referral_batch)
                    {{ $user->platinum->membership->referral_batch }}
                @endisset
                @empty($user->platinum->membership->referral_batch)
                    NULL
                @endempty
                </div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="application_date" class="mb-2">Date Of Application: </label>
                <div name="application_date">{{ $user->platinum->membership->application_date }}</div>
            </div>    
        </div>

        <div class="flex-initial self-center mt-auto">
            <div class="mb-4">
                {{-- <button class="bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-800">
                    Edit
                </button> --}}
                <a href="{{ route('users.index') }}" class="bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-800"> Back </a>
            </div>
        </div>
        
    </form>
</div>





