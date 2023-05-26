<?php

namespace Database\Seeders;

use App\Models\Competency;
use App\Models\Metric;
use Illuminate\Database\Seeder;

class CompetencyMatrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "competencies" => [
                'Scope & Influence' => [
                    "metrics" => [
                        "IC2" => "Your scope includes the multiple features and components that are being developed by your squad. 

                        You have a direct influence on the squad level however influence on the domain level is usually indirect and contribution to the chapter/s is sporadic.
                        
                        You are able to contribute autonomously, occasionally with the guidance of more senior members. 
                        
                        You contribute to architectural decisions on the features that you are developing with mentorship when necessary.",
                        "IC3" => "Your scope here contains multiple features that create impact at the domain level. 

                        You are usually the sole or co-owner of multiple features
                        
                        You have direct influence on the domain level and your influence on the tribe level is usually indirect.
                        
                        You are able to contribute completely autonomously and demonstrate a constant learning mentality.
                        
                        You identify non-optimal set-ups and strive, through architectural and communication means, to improve and introduce new technologies where necessary. 
                        
                        You own architectural decisions on the features that you are developing.
                        
                        Your influence is not limited to your own work, but you also mentor less experienced members of the team.",
                        "IC4" => "You are a trusted part of the technical leadership of your domain.
                        As a key influencer in planning strategy, you bring business and industry context to technology decisions.
                        You set the standard for engineering excellence in your domain.
                        You simplify systems and processes.
                        You align teams toward coherent architectural strategies.",
                    ]
                ],
                'Architecture' => [
                    "metrics" => [
                        "IC2" => "You make pragmatic time/space complexity tradeoffs in consultation with senior team members.

                        You create flexible software without over-engineering. You actively discuss high-level tradeoffs, re-use where possible, and are judicious about introducing dependencies.",
                        "IC3" => "You evaluate where each system is in its lifecycle and whenever appropriate, proactively fix architecture deficiencies and create/share lessons learned for your peers and associate engineers. 

                        You make appropriate architectural trade-offs. ",
                        "IC4" => "Your architectures are exemplary in terms of efficiency, stability, extensibility, and the ability to evolve over time.
                        You amplify your impact by leading design reviews for complex software projects and/or critical features.
                        You probe assumptions, illuminate pitfalls, and foster shared understanding.",
                    ]
                ],
                'Technical Competence' => [
                    "metrics" => [
                        "IC2" => "You are proficient in a broad range of design approaches and know when it is appropriate to use them. 

                        You are able to train new teammates on how your team’s software is engineered, how it operates, how secure it is, and how it fits into the bigger picture. 
                        
                        You have a good understanding of engineering best practices with consideration for observability, maintainability, scalability, security, and code quality.",
                        "IC3" => "You are considered a technical expert. 

                        You drive engineering best practices by considering aspects like observability, maintainability, scalability, and code quality.
                        
                        You build consensus by listing the pros and cons of different approaches when there are conflicting approaches. 
                        
                        You have deep knowledge of how the key frameworks and tools used by the team work, beyond what is common knowledge or sometimes even documented, and can apply that to critical decisions or problem-solving.",
                        "IC4" => "Your coding practices are exemplary in terms of code organization, clarity, simplicity, error handling, testing, and documentation.
                        You tackle intrinsically hard problems, acquiring expertise as needed.
                        You are adept at building consensus.
                        You educate your peers, keeping the engineering community up to date on advanced technical issues, technologies, and trends.",
                    ]
                ],
                'Quality of work' => [
                    "metrics" => [
                        "IC2" => "You consider the long-term impact of your contributions on the overall codebase and write code that any software engineer unfamiliar with the system can understand.

                        In addition to writing unit tests, you also add integration tests and contribute to keeping the end-to-end/functional test suite useful and reliable.",
                        "IC3" => "Your solutions are inventive, secure,  scalable, extensible and cost-effective.

                        You write software that is easy for others to contribute to.
                        ",
                        "IC4" => "Your software is robust in the presence of failures, scalability, and cost-effectiveness.",
                    ]
                ],
                'Business expertise' => [
                    "metrics" => [
                        "IC2" => "You understand the business context and technologies behind your team’s product area.

                        You strive to understand your customer's pain points/needs/desires and develop empathy for their issues.",
                        "IC3" => "Your work focuses on complex, ambiguous problem areas in existing tasks or new software initiatives. 

                        You understand the business impact of the features the team develops and show good judgment when making technical trade-offs between short and long-term needs. ",
                        "IC4" => "You bring business and industry context to technology decisions.",
                    ]
                ],
                'Execution' => [
                    "metrics" => [
                        "IC2" => "You are efficient with resource usage.

                        You are able to estimate solutions and component-level requirements. Your estimates contribute to your team’s predictability and throughput of value.
                         
                        You focus on operational excellence, constructively identifying problems, and designing practical solutions. 
                        
                        In the event of a problem, you are able to troubleshoot, research the root cause, and quickly resolve defects. ",
                        "IC3" => "You know how to divide a software project into parallel work that can be performed by you and other software engineers, and then reassembled successfully into a cohesive launch.

                        You strive to deliver impact early and release new value often in small slices.
                        
                        When there is an emergency and you are the on-call engineer, you inform all relevant stakeholders proactively. This refers not only to technical counterparts but also to business stakeholders. After the emergency is settled, you own the root cause and impact analysis, and share your learnings with other engineers in order to avoid similar incidents in the future.",
                        "IC4" => "You adapt your approach to meet the needs of the team, project, or product.
                        You split your time between coding, design, and architecture based on where your skills will have the greatest impact.
                        You personally produce code for significant, critical, or demanding software and influence just a few teams close to it.
                        The exact role you play may also change as a larger initiative progresses.",
                    ]
                ],
                'Impact' => [
                    "metrics" => [
                        "IC2" => "You solve complex problems that have a span of more than one component, applying appropriate technologies and best practices. ",
                        "IC3" => "You focus on evangelizing best practices like clean architecture and eliminating technical debt.

                        You bring perspective and provide context for current technology choices and guide future technology choices. 
                        
                        You contribute to the professional development of colleagues, improving their technical knowledge, engineering practices, and the ability to deliver value incrementally. 
                        
                        You ensure your team is stronger because of your presence, but does not require your presence to be successful.",
                        "IC4" => "Your expertise may be broadly applied and involved in the technical strategy, design, and delivery of a significant portion of architecture.
                        You share knowledge and collaborate with other Senior Engineers, specifically attending and/or presenting at guild-level activities.",
                    ]
                ],
                'Collaboration' => [
                    "metrics" => [
                        "IC2" => "You work on solutions with stakeholders and peers to address customer and business problems.

                        You support your team to evolve by actively participating in the code review process, design discussions, team planning, and engineering data reviews.
                         
                        You play a key role in improving your team’s communication and overall ",
                        "IC3" => "You are an active contributor to your chapter or guild [through participation in the dedicated events]

                        You are responsible for learning from other chapters/guilds members and bring this knowledge to your team. You need to detect the problems where guild-level discussion is required in your squad and 
                        escalate accordingly. 
                        
                        You work to resolve the root cause of endemic problems including areas where your team limits the innovation of other teams. ",
                        "IC4" => "You solicit differing views and are willing to change your mind as you learn more.",
                    ]
                ],
                'Ownership & Accountability' => [
                    "metrics" => [
                        "IC2" => "You are an autonomous contributor and don’t require technical assistance with frameworks or tools being used by the squad.

                        You propose solutions to problems or seek to resolve this yourself or by delegating this task to the right owner.",
                        "IC3" => "You are able to take the lead on challenging projects that require your team’s input. 

                        You are a key influencer in team strategy and drive mindful discussions with stakeholders and peers. 
                        
                        You take ownership of team architecture, providing a system-wide view and design guidance. 
                        
                        You actively recruit, as well as coach and mentor your squad. 
                        
                        You take ownership of your team’s effectiveness including the ability to spot inefficiencies in the flow and self-correct this. 
                        
                        You inspire the continuous improvement of your team’s software development lifecycle, using quantitative and qualitative signals",
                        "IC4" => "You are a hands-on technical leader.
                        You take ownership of your work and are accountable for its outcomes.
                        ",
                    ]
                ],
                'Growth Mindset' => [
                    "metrics" => [
                        "IC2" => "You take on larger initiatives and make software enhancements that improve team software and processes. ",
                        "IC3" => "You seek and, when appropriate, select the long-term view and execution. 

                        You are pragmatic and able to see the broader picture, avoiding local (squad-level) optimizations on the cost of the broader system or customer experience",
                        "IC4" => "You are flexible, adapting your approach to meet the needs of the team, project, or product. ",
                    ]
                ],
            ]
        ];
        
        foreach ($data["competencies"] as $competencyName => $competencyData) {
            $competency = Competency::create([
                'name' => $competencyName
            ]);

            foreach ($competencyData["metrics"] as $metricName => $metricDescription) {
                Metric::create([
                    'name' => $metricName,
                    'description' => $metricDescription,
                    'competency_id' => $competency->id,
                ]);
            }
        }
    }
}
