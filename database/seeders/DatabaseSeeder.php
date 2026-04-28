<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Agenda;
use App\Models\Home;
use App\Models\App;
use App\Models\Awards;
use App\Models\Competition;
use App\Models\Detail;
use App\Models\FAQ;
use App\Models\Fee;
use App\Models\Format;
use App\Models\Maintenance;
use App\Models\Participant;
use App\Models\Points;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Maintenance::create([
            'is_active' => false,
            'created_at' => now()
        ]);

        User::create([
            'name' => 'Admin Jakarta Global University',
            'email' => 'inspira@jgu.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('12345'),
            'created_at' => now()
        ]);

        App::insert([
            'app_icon' => 'images/jgu-wxut.png',
            'app_name' => json_encode([
                'JGU-WXUT',
                'INSPIRA ' . now()->format('Y'),
            ]),
            'is_fname_showed' => false,
            'is_lname_showed' => true,
            'is_image_fit' => false,
            'register' => 'https://docs.google.com/forms/d/e/1FAIpQLSc2z9QaxdUWjks7YKPsuhY8SJ1hqX6-x5CZVUoiNT3mBYd2zQ/viewform'
        ]);

        Home::create([
            'background' => 'images/home.png',
            'title' => '<b><em>International Forum</em></b> on Innovation, Strategy, and Presentation of Research Activity',
            'description' => 'Bridging engineering, business, and pharmaceutical expertise to advance technological innovation for global impact'
        ]);

        About::insert([
            'cover' => 'images/inspira-red.png',
            'content' => 'is a premier academic platform organized by Jakarta Global University (JGU) and Wuxi University of Technology (WXUT) that brings together emerging researchers, scholars, and innovators to showcase their ideas and insights in the fields of science, technology, business, and health. Under the theme “International Forum on Innovation, Strategy, and Presentation of Research Activity," this event aims to foster interdisciplinary collaboration, spark future-oriented thinking, and strengthen the research culture among the academic community. Through a dynamic combination of strategic forums, keynote lectures, and a competitive poster presentation, JGU-WXUT INSPIRA 2026 serves as a catalyst for knowledge exchange, academic excellence, and impactful innovation aligned with global challenges and sustainable development goals (SDGs).',
            'highlights' => json_encode([
                'Strategic Forum',
                'Discipline-Based Seminars (Parallel Sessions)',
            ]),
            'venue' => 'Jakarta Global University Ballroom | Wednesday, October 28, 2026',
        ]);

        Agenda::insert([
            [
                'description' => '<h1 class="text-gray-800 font-semibold text-base xl:text-xl flex items-center gap-2 mb-3">
                    1. Strategic Forum
                </h1>
                <span>
                    The highlight agenda is the <b>Strategic Forum titled "Bridging engineering, business, and
                        pharmaceutical expertise to advance technological innovation for global impact"</b>, which
                    brings together thought leaders from academia, industry, and government. This forum aims to
                    reinforce
                    collaboration among key stakeholders in building a sustainable innovation ecosystem. Through
                    panel discussions, interactive sessions, and the exchange of best practices, the forum will
                    explore strategic pathways to drive knowledge- and technology-based economic development.
                </span>
                <span class="text-center">
                    <h3><b><u>Keynote Speaker:</u></b></h3>
                    <ul>
                        <li>Wuxi University of Technology</li>
                        <li>Jakarta Global University</li>
                        <li>China Industry <span class="note">(Need Recommendation)</span></li>
                    </ul>
                </span>
                <h1 class="text-gray-800 font-semibold text-base xl:text-xl flex items-center gap-2 my-3">
                    2. Discipline-Based Seminars (Parallel Sessions)
                </h1>
                <span>
                    In addition to the strategic forum, the conference features discipline-based seminars conducted in
                    parallel sessions. These seminars provide a platform for researchers, academics, and practitioners
                    to present their latest research findings and innovations within their respective fields, including
                    engineering (mechanical, electrical, industrial, civil, and informatics), business and economics,
                    and health sciences/pharmacy. Each session encourages scholarly discussion, constructive feedback,
                    and interdisciplinary exchange, fostering academic rigor and collaboration across diverse areas of
                    expertise.
                </span>',
                'agenda' => '-',
                'timeline' => '-',
                'order' => 0
            ],
            [
                'description' => '-',
                'agenda' => 'Abstract Submission Deadline',
                'timeline' => 'June 30, 2026',
                'order' => 1
            ],
            [
                'description' => '-',
                'agenda' => 'Full Paper Submission Deadline',
                'timeline' => 'July 31, 2026',
                'order' => 2
            ],
            [
                'description' => '-',
                'agenda' => 'Notification of Acceptance',
                'timeline' => 'August 25, 2026',
                'order' => 3
            ],
            [
                'description' => '-',
                'agenda' => 'Camera-Ready Submission',
                'timeline' => 'September 10, 2026',
                'order' => 4
            ],
            [
                'description' => '-',
                'agenda' => 'Early Bird Registration Deadline',
                'timeline' => 'September 15, 2026',
                'order' => 5
            ],
            [
                'description' => '-',
                'agenda' => 'Regular Registration Deadline',
                'timeline' => 'October 5, 2026',
                'order' => 6
            ],
            [
                'description' => '-',
                'agenda' => 'Conference Date',
                'timeline' => 'October 28, 2026',
                'order' => 7
            ],
        ]);

        Topic::insert([
            [
                'title' => 'Engineering and Technology',
                'list' => json_encode([
                    'Mobile Applications, Biomedical Informatics, and Security Systems ',
                    'Database Systems, Data Mining, Artificial Intelligence, and Computer Networks ',
                    'Smart and Lean Manufacturing Systems, Product Design and Development ',
                    'Digital Supply Chain, Quality Management, and Green Manufacturing ',
                    'Structural, Geotechnical, Earthquake, Road and Bridge Engineering ',
                    'Transportation Engineering, Water Resources, Disaster Mitigation, and Construction Management ',
                    'Power Systems, High Voltage Engineering, Renewable Energy, and Smart Grid Technology ',
                    'Robotics, Embedded Systems, VLSI, Signal and Image Processing ',
                    'Wireless and Mobile Communication Systems ',
                    'Mechatronics, Applied and Computational Mechanics ',
                    'Materials Engineering, Design Engineering, Thermal and Fluid Sciences ',
                    'Automotive Engineering',
                ]),
            ],
            [
                'title' => 'Business and Pharmaceutical Sciences',
                'list' => json_encode([
                    'Business and Entrepreneurship in the Tech Era',
                    'Tech-Driven Business Strategies and Economic Sustainability',
                    'Financial Technology (FinTech) and Digital Economy',
                    'Digital Transformation & Smart Technologies',
                    'Sustainability, ESG, and Green Business Practices',
                    'Marketing and Consumer Behaviour in the Digital Age',
                    'Leadership, Innovation Management, and Corporate Strategy',
                    'Pharmaceutical formulation, biotechnology, and drug design',
                    'Herbal technology, pharmacology, and regulatory compliance',
                ]),
            ],
        ]);

        Participant::insert([
            [
                'title' => 'International Participant',
                'icon' => 'images/icons8-research-64.png',
                'background' => 'images/back1.jpg'
            ], [
                'title' => 'Researcher & Lecturer',
                'icon' => 'images/icons8-college-64.png',
                'background' => 'images/back2.jpg'
            ], [
                'title' => 'College & University Student',
                'icon' => 'images/icons8-book-64.png',
                'background' => 'images/back3.jpg'
            ],
        ]);

        Competition::insert([
            [
                'title' => 'Oral Presentation (Online via Zoom/Gmeet)',
                'content' => 'Participants will deliver a 10-minute research presentation followed by a 5-minute Q&A session with the judges. This category emphasizes clarity, scientific rigor, and effective communication. Presentations will be conducted online via Zoom/Gmeet.'
            ],
            [
                'title' => 'Poster Presentations (On-site)',
                'content' => 'Participants will present their research through a scientific poster in a face-to-face session with the judges. Each participant will have the opportunity to explain their work and engage in a brief Q&A session (10-minute poster presentation; 5-minute Q&A session). This category emphasizes visual communication, content clarity, and the ability to discuss research findings concisely and confidently. Presentations will take place onsite at the event venue.'
            ],
        ]);

        Awards::insert([
            // 1
            [
                'category' => 'Researchers and Lecturers',
                'title' => 'Best Research Project',
                'description' => 'Awarded to the most outstanding research project in terms of scientific contribution, methodological rigor, and novelty of ideas.',
                'online_prize' => 2000000,
                'offline_prize' => 4000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 1
            ],
            [
                'category' => 'Researchers and Lecturers',
                'title' => 'Innovation for Society Award',
                'description' => 'Given to the project that demonstrates the greatest impact on society or effectively addresses real-world challenges through innovative solutions.',
                'online_prize' => 1250000,
                'offline_prize' => 2500000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 2
            ],
            [
                'category' => 'Researchers and Lecturers',
                'title' => 'Judges\' Choice Award',
                'description' => 'A special recognition granted based on the collective evaluation and discretion of the panel of judges, considering originality, relevance, and presentation.',
                'online_prize' => 1000000,
                'offline_prize' => 2000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 3
            ],
            // 2
            [
                'category' => 'College Students 1',
                'title' => 'Best Student Project',
                'description' => 'Presented to the student-led project that excels in innovation, relevance to current issues, and overall execution.',
                'online_prize' => 1250000,
                'offline_prize' => 2500000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 1
            ],
            [
                'category' => 'College Students 1',
                'title' => 'Best Design',
                'description' => 'Awarded for the most visually compelling and well-structured presentation file/poster that effectively communicates the project\'s objectives, methodology, and results.',
                'online_prize' => 1000000,
                'offline_prize' => 2000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 2
            ],
            [
                'category' => 'College Students 1',
                'title' => 'Best Presentation',
                'description' => 'Recognizes the participant who delivers the most clear, engaging, and professional presentation.',
                'online_prize' => 1000000,
                'offline_prize' => 2000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 3
            ],
            [
                'category' => 'College Students 2',
                'title' => 'Gold/Silver/Bronze Award',
                'description' => 'Given to the top three student projects that demonstrate exceptional quality across all assessment criteria.',
                'online_prize' => 0,
                'offline_prize' => 0,
                'on_gold' => 1000000,
                'off_gold' => 2000000,
                'on_silver' => 500000,
                'off_silver' => 1000000,
                'on_bronze' => 250000,
                'off_bronze' => 500000,
                'order' => 4
            ],
            // 3
            [
                'category' => 'Highschool Students',
                'title' => 'Best Young Innovator Project',
                'description' => 'Granted to the high school project that showcases outstanding creativity, problem-solving, and potential for further development.',
                'online_prize' => 500000,
                'offline_prize' => 1000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 1
            ],
            [
                'category' => 'Highschool Students',
                'title' => 'Best Presentation File/Poster',
                'description' => 'Awarded for the most visually attractive and easy-to-understand presentation file/poster among high school participants.',
                'online_prize' => 250000,
                'offline_prize' => 500000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 2
            ],
        ]);

        FAQ::insert([
            [
                'q' => 'Are the Oral Presentation and Poster Competition separate activities?',
                'a' => 'Yes, the Oral Presentation and Poster Competition are separate activities. They are considered two distinct competitions within the INSPIRA 2025 International Competition.',
                'order' => 1
            ],
            [
                'q' => 'What is one key difference between the two competitions?',
                'a' => 'One of the main differences is the format: the Oral Presentation will be conducted online (October 15-16, 2025), while the Poster Competition will take place offline during the event (October 21, 2025).',
                'order' => 2
            ],
            [
                'q' => 'Can participants join both competitions?',
                'a' => 'Yes. Participants may choose to take part in either one or both competitions, depending on their preference and eligibility.',
                'order' => 3
            ],
            [
                'q' => 'How is the Oral Presentation conducted?',
                'a' => 'Participants deliver a live online presentation of their research or project using slides, followed by a brief Q&A session with the judges.',
                'order' => 4
            ],
            [
                'q' => 'How is the Poster Competition conducted?',
                'a' => 'Participants display their posters at the event venue for evaluation, and they provide a brief explanation to the judges during the judging session.',
                'order' => 5
            ],
            [
                'q' => 'What skills are assessed in each competition?',
                'a' => 'The Oral Presentation focuses on communication, presentation, and depth of understanding. The Poster Competition emphasizes visual design, clarity of information, and the ability to summarize research effectively.',
                'order' => 0
            ]
        ]);

        Fee::insert([
            [
                'title' => 'International Participant',
                'online_fee' => 50,
                'on_fee_type' => 'USD',
                'offline_fee' => 30,
                'off_fee_type' => 'USD',
                'order' => 1
            ],
            [
                'title' => 'Researcher & Lecturer',
                'online_fee' => 400000,
                'on_fee_type' => 'IDR',
                'offline_fee' => 300000,
                'off_fee_type' => 'IDR',
                'order' => 2
            ],
            [
                'title' => 'College & University Student',
                'online_fee' => 200000,
                'on_fee_type' => 'IDR',
                'offline_fee' => 100000,
                'off_fee_type' => 'IDR',
                'order' => 3
            ]
        ]);

        Points::insert([
            [
                'order' => 1,
                'content' => 'Background and Objectives'
            ],
            [
                'order' => 2,
                'content' => 'Research Methodology'
            ],
            [
                'order' => 3,
                'content' => 'Results and Discussion'
            ],
            [
                'order' => 4,
                'content' => 'Conclusions and Recommendations'
            ],
            [
                'order' => 5,
                'content' => 'Research Outcomes'
            ],
        ]);

        Detail::insert([
            [
                'order' => 1,
                'section' =>  'Header',
                'content' => 'Header JGU & WXUT logos, Event Title, Poster Title'
            ],
            [
                'order' => 2,
                'section' =>  'Authors',
                'content' => 'Participant\'s name, institution, email'
            ],
            [
                'order' => 3,
                'section' =>  'Background/Introduction',
                'content' => 'Problem background'
            ],
            [
                'order' => 4,
                'section' =>  'Objectives/Aims',
                'content' => 'Research or project objectives'
            ],
            [
                'order' => 5,
                'section' =>  'Methodology',
                'content' => 'Methods (if research), or program steps if not research'
            ],
            [
                'order' => 6,
                'section' =>  'Results/Insights',
                'content' => 'Findings, solutions, or key ideas'
            ],
            [
                'order' => 7,
                'section' =>  'Conclusion/Impact',
                'content' => 'Conclusions, impacts, recommendations'
            ],
            [
                'order' => 8,
                'section' =>  'References',
                'content' => 'Concise, only 2-3 references (if any)'
            ],
            [
                'order' => 9,
                'section' =>  'Acknowledgement',
                'content' => '(Optional) If part of a university program or supervised by a lecturer'
            ],
            [
                'order' => 10,
                'section' =>  'Visual',
                'content' => 'Images, graphs, icons, or photos supporting the content'
            ],
            [
                'order' => 11,
                'section' =>  'Footer',
                'content' => 'QR code/link if including a video presentation or full publication (optional)'
            ],
        ]);

        Format::insert([
            [
                'content' => '-',
                'document' => 'docs/Guidebook JGU-WXUT INSPIRA 2025-02.pdf',
                'order' => 0,
            ],
            [
                'content' => '<b>Size: </b>A1 (594 x 841mm) - Portrait',
                'document' => '-',
                'order' => 1
            ],
            [
                'content' => '<b>File Format: </b>PDF and PNG',
                'document' => '-',
                'order' => 2
            ],
            [
                'content' => '<b>Font: </b>Use universal fonts (Arial, Calibri, Roboto)',
                'document' => '-',
                'order' => 3
            ],
            [
                'content' => '<b>Color: </b>Creative use is allowed',
                'document' => '-',
                'order' => 4
            ]
        ]);
    }
}
