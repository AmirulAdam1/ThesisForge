<x-app-layout>
    <div x-data="reportData()">
        <form @submit.prevent="submitForm" class="my-4">
            <h2 class="font-bold text-2xl text-center mb-2">Report Generate</h2>
            <div class="flex align-items-center items-center justify-center gap-4">
                <!-- Program Selection -->
                <div class="flex align-items-center gap-1 text-lg">
                    <label for="program_interested" class="block text-lg mb-2">Program:</label>
                    <select x-model="form.program_interested" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm py-1" name="program_interested">
                        <option>All</option>
                        <option value="Platinum Professorship">Platinum Professorship</option>
                        <option value="Platinum Premier">Platinum Premier</option>
                        <option value="Platinum Elite">Platinum Elite</option>
                        <option value="Platinum Dr.Jr.">Platinum Dr.Jr.</option>
                        <option value="Ala Carte">Ala Carte</option>
                    </select>
                    @error('program_interested')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Batch Selection -->
                <div class="flex align-items-center gap-1 text-lg">
                    <label for="program_batch" class="block">Batch:</label>
                    <select x-model="form.program_batch" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm py-1" name="program_batch">
                        <option>All</option>
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

                <!-- Date Fields -->
                <div class="flex align-items-center gap-1 text-lg">
                    <label for="from_date" class="block">From:</label>
                    <input x-model="form.from_date" type="date" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-1" name="from_date"/>
                    @error('from_date')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex align-items-center gap-1 text-lg">
                    <label for="to_date" class="block">To:</label>
                    <input x-model="form.to_date" type="date" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-1" name="to_date"/>
                    @error('to_date')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="text-xs border border-gray-400 bg-slate-300 dark:border-gray-500 dark:bg-gray-700 dark:text-white rounded-sm shadow-sm px-1 hover:bg-cyan-400 h-fit">Submit</button>
            </div>
        </form>

        <div x-show="platinums.length > 0" class="bg-slate-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded overflow-x-auto mt-4">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr>
                        <th class="p-2">Registered At</th>
                        <th class="p-2">Name</th>
                        <th class="p-2">Field</th>
                        <th class="p-2">Institute</th>
                        <th class="p-2">Current Level</th>
                        <th class="p-2">Program</th>
                        <th class="p-2">Batch</th>
                    </tr>
                </thead>
                <tbody class="[&>*:nth-child(odd)]:bg-zinc-200 [&>*:nth-child(even)]:bg-zinc-100 [&>*:nth-child(odd)]:dark:bg-zinc-700 [&>*:nth-child(even)]:dark:bg-zinc-500">
                    <template x-for="platinum in platinums" :key="platinum.id">
                        <tr>
                            <td x-text="platinum.created_at"></td>
                            <td x-text="platinum.user.name"></td>
                            <td x-text="platinum.education.field"></td>
                            <td x-text="platinum.education.institute"></td>
                            <td x-text="platinum.education.current_level"></td>
                            <td x-text="platinum.membership.program_interested"></td>
                            <td x-text="platinum.membership.program_batch"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function reportData() {
            return {
                form: {
                    program_interested: 'All',
                    program_batch: 'All',
                    from_date: '',
                    to_date: ''
                },
                platinums: [],
                async submitForm() {
                    const response = await fetch('{{ route('users.report.submit') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(this.form)
                    });
                    const data = await response.json();
                    this.platinums = data.platinums;
                }
            }
        }
    </script>
</x-app-layout>
