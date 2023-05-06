<?php

namespace Database\Seeders;

use App\Models\Teachers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // * FOR ZAHIDUR RASHID
        $teacherInfo = new Teachers();
        $teacherInfo->teacher_name = "Engr. Syed Zahidur Rashid";
        $teacherInfo->teacher_designetion = "Assistant Professor";
        $teacherInfo->accademic_profile ="<ul><li>M.Sc. in Computer Science and Engineering</li><li>Major in Advanced Optical Communication Systems and Networks</li><li>B.Sc. in Computer and Communication Engineering</li></ul>";
        $teacherInfo->biography = "An academician with a profound interest in the field of Electronics, Computer, and Telecommunication Engineering.
        I aim to bring an open mind, a positive attitude, and high expectations to the classroom each day. I believe that I owe it to my students, as well as the community, to bring consistency, diligence, and warmth to my job in the hope that I can ultimately inspire and encourage such traits in the students as well.";
        $teacherInfo->research_areas = '<ol><li><a href="https://scholar.google.com/citations?user=E5qkKLYAAAAJ&amp;hl=en&amp;oi=ao" target="_blank">Google Scholar</a></li><li><a href="https://www.researchgate.net/profile/Syed-Zahidur-Rashid" target="_blank">Research Gate</a></li><li><a href="https://orcid.org/0000-0002-8635-5771" target="_blank">ORCID</a><br><br><br></li></ol>';
        $teacherInfo->teaching_subject = "<ol><li>Computer Network&nbsp;</li><li>programming&nbsp;</li></ol>";
        $teacherInfo->teacher_image = "http://127.0.0.1:8000/storage/Teachers//zahid.jpg";
        $teacherInfo->teacher_phone = "01857522408";
        $teacherInfo->teacher_email = "szrashidcce@yahoo.com";
        $teacherInfo->save();


        // * FOR AMIR FAISAL
        $teacherInfo = new Teachers();
        $teacherInfo->teacher_name = "Md Mostafa Amir Faisal";
        $teacherInfo->teacher_designetion = "Assistant Professor";
        $teacherInfo->accademic_profile ="<ul><li>M.Sc. in Computer Science and Engineering</li><li>Major in Advanced Optical Communication Systems and Networks</li><li>B.Sc. in Computer and Communication Engineering</li></ul>";
        $teacherInfo->biography = "An academician with a profound interest in the field of Electronics, Computer, and Telecommunication Engineering.
        I aim to bring an open mind, a positive attitude, and high expectations to the classroom each day. I believe that I owe it to my students, as well as the community, to bring consistency, diligence, and warmth to my job in the hope that I can ultimately inspire and encourage such traits in the students as well.";
        $teacherInfo->research_areas = '<ol><li><a href="https://scholar.google.com/citations?user=E5qkKLYAAAAJ&amp;hl=en&amp;oi=ao" target="_blank">Google Scholar</a></li><li><a href="https://www.researchgate.net/profile/Syed-Zahidur-Rashid" target="_blank">Research Gate</a></li><li><a href="https://orcid.org/0000-0002-8635-5771" target="_blank">ORCID</a><br><br><br></li></ol>';
        $teacherInfo->teaching_subject = "<ol><li>Computer Network&nbsp;</li><li>programming&nbsp;</li></ol>";
        $teacherInfo->teacher_image = "http://127.0.0.1:8000/storage/Teachers//amir-faisal.jpg";
        $teacherInfo->teacher_phone = "01857522408";
        $teacherInfo->teacher_email = "szrashidcce@yahoo.com";
        $teacherInfo->save();


        // * FOR JASHIM
        $teacherInfo = new Teachers();
        $teacherInfo->teacher_name = "Mohammed Jashim Uddin";
        $teacherInfo->teacher_designetion = "Assistant Professor";
        $teacherInfo->accademic_profile ="<ul><li>M.Sc. in Computer Science and Engineering</li><li>Major in Advanced Optical Communication Systems and Networks</li><li>B.Sc. in Computer and Communication Engineering</li></ul>";
        $teacherInfo->biography = "An academician with a profound interest in the field of Electronics, Computer, and Telecommunication Engineering.
        I aim to bring an open mind, a positive attitude, and high expectations to the classroom each day. I believe that I owe it to my students, as well as the community, to bring consistency, diligence, and warmth to my job in the hope that I can ultimately inspire and encourage such traits in the students as well.";
        $teacherInfo->research_areas = '<ol><li><a href="https://scholar.google.com/citations?user=E5qkKLYAAAAJ&amp;hl=en&amp;oi=ao" target="_blank">Google Scholar</a></li><li><a href="https://www.researchgate.net/profile/Syed-Zahidur-Rashid" target="_blank">Research Gate</a></li><li><a href="https://orcid.org/0000-0002-8635-5771" target="_blank">ORCID</a><br><br><br></li></ol>';
        $teacherInfo->teaching_subject = "<ol><li>Computer Network&nbsp;</li><li>programming&nbsp;</li></ol>";
        $teacherInfo->teacher_image = "http://127.0.0.1:8000/storage/Teachers//jashim.jpg";
        $teacherInfo->teacher_phone = "01857522408";
        $teacherInfo->teacher_email = "szrashidcce@yahoo.com";
        $teacherInfo->save();


        // * FOR HANNAN
        $teacherInfo = new Teachers();
        $teacherInfo->teacher_name = "Dr. Saif Hannan";
        $teacherInfo->teacher_designetion = "Assistant Professor";
        $teacherInfo->accademic_profile ="<ul><li>Ph.D. in Electrical, Electronic and Systems </li><li>Major in Advanced Optical Communication Systems and Networks</li><li>B.Sc. in Physics (SUST)</li> <li>M.Sc. in Physics (SUST)</li></ul>";
        $teacherInfo->biography = "Salam everyone! I am Dr. Saif Hannan, Assistant Professor in the dept. of ETE at IIUC, Bangladesh. I teach physics, EMF and other relevant courses in the ETE dept. I do research mainly on metamaterial absorbers, sensors and antennas. I supervise thesis students and like to publish in reputed journals.";
        $teacherInfo->research_areas = '<ol><li><a href="https://scholar.google.com/citations?hl=en&user=O4jX8DQAAAAJ" target="_blank">Google Scholar</a></li><li><a href="https://www.researchgate.net/profile/Saif-Hannan" target="_blank">Research Gate</a></li><li><a href=" https://orcid.org/0000-0002-9026-4370" target="_blank">ORCID</a><br></li><li><a href=" https://www.scopus.com/authid/detail.uri?authorId=57193697914" target="_blank">Scopus</a></li><li><a href="https://publons.com/wos-op/researcher/3326233/saif-hannan/" target="_blank">Web of Science</a></li></ol>';
        $teacherInfo->teaching_subject = "<ol><li>Computer Network&nbsp;</li><li>programming&nbsp;</li></ol>";
        $teacherInfo->teacher_image = "http://127.0.0.1:8000/storage/Teachers//hannan.jpg";
        $teacherInfo->teacher_phone = "01325664893";
        $teacherInfo->teacher_facebook = "https://www.facebook.com/saif.hannan";
        $teacherInfo->teacher_email = "saifhannan@yahoo.com";
        $teacherInfo->save();


        // * FOR IBRAHIM
        $teacherInfo = new Teachers();
        $teacherInfo->teacher_name = "Md. Ibrahim";
        $teacherInfo->teacher_designetion = "Assistant Professor";
        $teacherInfo->accademic_profile ="<ul><li>M.Sc. in Computer Science and Engineering</li><li>Major in Advanced Optical Communication Systems and Networks</li><li>B.Sc. in Computer and Communication Engineering</li></ul>";
        $teacherInfo->biography = "An academician with a profound interest in the field of Electronics, Computer, and Telecommunication Engineering.
        I aim to bring an open mind, a positive attitude, and high expectations to the classroom each day. I believe that I owe it to my students, as well as the community, to bring consistency, diligence, and warmth to my job in the hope that I can ultimately inspire and encourage such traits in the students as well.";
        $teacherInfo->research_areas = '<ol><li><a href="https://scholar.google.com/citations?user=E5qkKLYAAAAJ&amp;hl=en&amp;oi=ao" target="_blank">Google Scholar</a></li><li><a href="https://www.researchgate.net/profile/Syed-Zahidur-Rashid" target="_blank">Research Gate</a></li><li><a href="https://orcid.org/0000-0002-8635-5771" target="_blank">ORCID</a><br><br><br></li></ol>';
        $teacherInfo->teaching_subject = "<ol><li>Computer Network&nbsp;</li><li>programming&nbsp;</li></ol>";
        $teacherInfo->teacher_image = "http://127.0.0.1:8000/storage/Teachers//ibrahim.jpg";
        $teacherInfo->teacher_phone = "01857522408";
        $teacherInfo->teacher_email = "szrashidcce@yahoo.com";
        $teacherInfo->save();
    }
}
