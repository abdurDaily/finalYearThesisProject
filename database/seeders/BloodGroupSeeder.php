<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Seeder;
use App\Models\BloodGroupDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloodGroup = new BloodGroup();
        $bloodGroup->blood_group_name = "A+";
        $bloodGroup->save();

        $bloodGroup = new BloodGroup();
        $bloodGroup->blood_group_name = "A-";
        $bloodGroup->save();

        $bloodGroup = new BloodGroup();
        $bloodGroup->blood_group_name = "B+";
        $bloodGroup->save();

        $bloodGroup = new BloodGroup();
        $bloodGroup->blood_group_name = "B-";
        $bloodGroup->save();

        $bloodGroup = new BloodGroup();
        $bloodGroup->blood_group_name = "AB+";
        $bloodGroup->save();

        $bloodGroup = new BloodGroup();
        $bloodGroup->blood_group_name = "AB-";
        $bloodGroup->save();

        $bloodGroup = new BloodGroup();
        $bloodGroup->blood_group_name = "O+";
        $bloodGroup->save();

        $bloodGroup = new BloodGroup();
        $bloodGroup->blood_group_name = "O-";
        $bloodGroup->save();


        // ** A+ LIST OF BLOOD GROUP
        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'md abdur rahman';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01647460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 1;
        $listBloodGroup->save();


        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'md golam rabbani';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01647460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 1;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'tafimul islam';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01647460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 1;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'abir shariar';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01647460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 1;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'abu talha';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01647460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 1;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'sifat ullah';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01647460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 1;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'humayun kabir';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01647460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 1;
        $listBloodGroup->save();





        // ** A+ LIST OF BLOOD GROUP
        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'md abdur rahman';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01747460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 2;
        $listBloodGroup->save();


        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'sifat ullah';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01647460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 2;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'md abdur rahman';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01847460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 2;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'md abdur rahman';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01547460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 2;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'abir shariar';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01347460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 2;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'md abdur rahman';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01847460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 2;
        $listBloodGroup->save();

        $listBloodGroup = new BloodGroupDetails();
        $listBloodGroup->bloddonor_name = 'abu talha';
        $listBloodGroup->birth_date = '2023-05-02';
        $listBloodGroup->contact_number = '01747460000';
        $listBloodGroup->department_name = "ETE";
        $listBloodGroup->blood_group_id  = 2;
        $listBloodGroup->save();


    }
}
