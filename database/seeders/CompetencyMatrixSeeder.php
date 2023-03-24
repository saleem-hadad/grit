<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Competency;
use App\Models\Metric;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetencyMatrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "areas" => [
                'Technical skills' => [
                    "competencies" => [
                        'Writing code' => [
                            "metrics" => [
                                "IC2" => "Consistently writes code that is easily testable, easily understood by other developers, and accounts for edge cases and errors. Uses documentation effectively.",
                                "IC3" => "Consistently writes production-ready code that is easily testable, easily understood by other developers, and accounts for edge cases and errors. Understands when it is appropriate to leave comments, but biases towards self-documenting code.",
                                "IC4" => "Consistently writes production-ready code that is easily testable, easily understood by other developers, and accounts for edge cases and errors. Understands when it is appropriate to leave comments, but biases towards self-documenting code.",
                            ]
                        ],
                        'Testing' => [
                            "metrics" => [
                                "IC2" => "Understands the testing pyramid, writes unit tests in accordance with it, as well as higher level tests with help from more senior engineers. Always tests expected edge cases and errors as well as the happy path. Applies TDD and Mocks when beneficial. Never pushes untested code.",
                                "IC3" => "Understands the testing pyramid, and writes unit tests as well as higher level tests in accordance with it. Always writes tests to handle expected edge cases and errors gracefully, as well as happy paths. Applies TDD and Mocks when beneficial. Always refactors code towards testability. Never pushes untested code.",
                                "IC4" => "Understands the testing pyramid, and writes unit tests as well as higher level tests in accordance with it. Always writes tests to handle expected edge cases and errors gracefully, as well as happy paths. Applies TDD and Mocks when beneficial. Always refactors code towards testability. Never pushes untested code.",
                            ]
                        ],
                        'Debugging' => [
                            "metrics" => [
                                "IC2" => "Proficient at using a systematic approach to triage sources of errors and to debug issues located within a single service and it's upstream dependencies",
                                "IC3" => "Proficient at using systematic debugging to diagnose all issues located to a single service. Uses systematic debugging to diagnose cross service issues.",
                                "IC4" => "Proficient at using systematic debugging to diagnose all issues within the scope of their domain and across multiple services.",
                            ]
                        ],
                        'Observability' => [
                            "metrics" => [
                                "IC2" => "Is aware of the organization's monitoring philosophy and the operational metrics for their team’s domain. Reasons about performance, measures it and resolves bottlenecks in the system. Covers new services within monitoring philosophy. Participates in on-call, if possible.",
                                "IC3" => "Is aware of the organization's monitoring philosophy. Covers new services within monitoring philosophy.  Reasons about performance, measures it and resolves bottlenecks in the system. Participates in on-call. Helps tune and change the monitoring on their team accordingly. Is aware of the operational and business metrics for their team’s domain and uses it as a basis for suggesting stability and performance improvements. ",
                                "IC4" => "Drives monitoring work for his/her domain based on the organization's monitoring philosophy. Is aware of the operational and business metrics for their team’s domain and uses it as a basis for driving changes to the team's services to achieve stability and performance improvements. Covers new services within monitoring philosophy. Participates in on-call.",
                            ]
                        ],
                        'Understanding Code' => [
                            "metrics" => [
                                "IC2" => "Understands the team's domain at a high level, can gain sufficient context to work productively within it.",
                                "IC3" => "Understands their team's domain at a high level and can gather sufficient context to work productively within it. Has expertise in their team's domain. ",
                                "IC4" => "Has expertise in the domain within their team including the breadth of services, how they interact, and data flows between systems. Understands adjacent domains as they affect their teams.",
                            ]
                        ],
                        'Software Architecture' => [
                            "metrics" => [
                                "IC2" => "Consistently designs code that is aligned with the overall application or service architecture and strives to comply with our architecture guidelines. Understands bottlenecks of scaling and works to resolve them with help of more senior engineers. Understand and applies bounded contexts in service design.",
                                "IC3" => "Designs code and architecting applications or services that are aligned with the overall  application or service architecture and our architecture guidelines. Utilizes abstractions and code isolation effectively. Architects applications, services and systems using well accepted design patterns to allow for iterative, autonomous development and future scaling. Understands and applies bounded context in service design.",
                                "IC4" => "Architects services and systems using well accepted design patterns to allow for iterative, autonomous development and future scaling. Anticipates future use cases and makes design decisions that minimize the cost of future changes. Understands and applies bounded context in service design. Minimizes service cross-dependencies to increase resilience.",
                            ]
                        ],
                        'Security' => [
                            "metrics" => [
                                "IC2" => "Understands the importance of security. Utilizes this knowledge to ask more senior engineers for help on making decisions that may have security implications. Has understanding of OWASP top ten.",
                                "IC3" => "Approaches all engineering work with a security lens. Actively looks for security vulnerabilities both in the code and when providing peer reviews. Good understanding of OWASP top ten.",
                                "IC4" => "Actively works with the security team, as well as their own teams, to refine their approach to security based on the organization's security strategy. Fosters a security first mindset within their own teams, and leads by example. Great understanding of OWASP top ten.",
                            ]
                        ],
                    ],
                ],
                'Delivery' => [
                    "competencies" => [
                        'Work breakdown' => [
                            "metrics" => [
                                "IC2" => "Before beginning work, ensures that tasks are appropriately sized for continuous integration and incremental delivery.",
                                "IC3" => "Reviews tasks critically and ensures they’re appropriately sized for continuous integration and incremental delivery.",
                                "IC4" => "Reviews epics and projects critically and ensures they’re appropriately broken down and prioritised, and well understood by their teams. Drives short cycle time.",
                            ]
                        ],
                        'Prioritization, dependencies' => [
                            "metrics" => [
                                "IC2" => "Ensures tasks are prioritised correctly. Notes dependencies.",
                                "IC3" => "Ensures tasks are prioritised correctly, and that dependencies are noted. Works independently on dependencies without reliance on other teams.",
                                "IC4" => "Ensures dependencies are noted and well understood their teams and adjacent dependent teams, at both the task and epic level. Works independently on dependencies without any reliance on other teams. Works across several teams to foster a culture of priority setting and urgency in alignment with organizational strategy. ",
                            ]
                        ],
                        'Process Thinking' => [
                            "metrics" => [
                                "IC2" => "Thinks about team practices and processes and discusses improvements with team.",
                                "IC3" => "Always thinks about team practices and processes and drives continuous improvements with team. Usually collaborates with other teams in the tribe to improve practices.",
                                "IC4" => "Thinks about team practices and processes and regularly discusses improvements with their teams and drives their continuous improvement. Usually collaborates with others to improve organizational practices and processes.",
                            ]
                        ],
                        'Dealing with ambiguity' => [
                            "metrics" => [
                                "IC2" => "Always handles risk, change, and uncertainty within their personal scope of work effectively. Usually decides and acts responsibly without having the total picture during routine business, and when in high pressure situations.",
                                "IC3" => "Always handles risk, change, and uncertainty within their team and across multiple dependent teams.  Decides and acts responsibly without having the total picture during routine business and when in high pressure situations.",
                                "IC4" => "Effectively handles risk, change, and uncertainty within their team and across multiple dependent teams. Decides and acts responsibly in their work with their team without having the total picture during routine business, as well as when in high pressure situations.",
                            ]
                        ],
                        'Reliability, delivery accountability' => [
                            "metrics" => [
                                "IC2" => "Commits to a realistic amount of work, and works with their teammates both to ensure they understand priority and urgency, and to deliver upon them accordingly. Escalates any blockers, delays, and cost ballooning to their team daily. Clarifies expectations with their teammates. ",
                                "IC3" => "Ensures their commitments are realistic, understands their priority and urgency, and delivers upon them accordingly. Anticipates and communicates blockers, delays, and cost ballooning for their work before they require escalation. Ensures expectations within their team are clarified between all parties involved. ",
                                "IC4" => "Anticipates and communicates blockers, delays, and cost ballooning within their teams projects and dependencies, before they require escalation. Ensures expectations across teams and stakeholders are clarified between all parties involved. ",
                            ]
                        ],
                        'Economic thinking' => [
                            "metrics" => [
                                "IC2" => "When taking action, weighs cost and value in order to take the most economic action with help from more senior engineers. Uses this type of thinking to make suggestions to teammates.",
                                "IC3" => "When taking action, weighs cost and value in order to take the most economic action. Uses this thinking in their own work, and to make suggestions to teammates.",
                                "IC4" => "When taking action, weighs cost and value in order to take the most economic action. Uses this thinking in their own work, and to foster a culture within their team where people apply economic thinking to make timely decisions.",
                            ]
                        ],
                    ],
                ],
                'Feedback, Communication, Collaboration' => [
                    "competencies" => [
                        'Delivering Feedback' => [
                            "metrics" => [
                                "IC2" => "Delivers appreciation and constructive feedback to their team, teammates, and manager in a useful manner.",
                                "IC3" => "Delivers appreciation and constructive feedback to their team, teammates, and manager in a useful manner. Delivers feedback within their team and to their team's business stakeholders when opportunities arise. ",
                                "IC4" => "Fosters a culture of delivering praise and constructive feedback within their team and team's respective business stakeholders. Actively demonstrates these behaviours. ",
                            ]
                        ],
                        'Seeking and receiving feedback' => [
                            "metrics" => [
                                "IC2" => "Actively seeks out feedback from their teammates and manager, and works to use feedback that they receive as a tool for growth. Interacts with stakeholders to gain feedback on self and team.",
                                "IC3" => "Works within their team and with its business stakeholders to foster a culture of seeking out feedback and using it as a tool for growth. Interacts with stakeholders to gain feedback on self and team. Actively demonstrates these behaviours. ",
                                "IC4" => "Works within their team and with its business stakeholders to foster a culture of seeking out feedback and using it as a tool for growth. Actively demonstrates these behaviours. ",
                            ]
                        ],
                        'Effective communication' => [
                            "metrics" => [
                                "IC2" => "Usually communicates effectively, clearly, concisely and in an audience-oriented way in written and verbal form both technical and non technical subjects, to their teammates. Actively listens to others and ensures they are understood. Pays attention to nonverbal communication. ",
                                "IC3" => "Communicates effectively, clearly, concisely in written and verbal form both technical and non technical subjects, and in an audience-oriented way within their team. Actively listens to others and ensures they are understood. Pays attention to nonverbal communication. ",
                                "IC4" => "Is able to communicate effectively with a diverse set of teams. Fosters a culture of clear, concise, effective, audience-oriented communication across several teams, ensuring teammates actively listen to others and are understood. Actively demonstrates these behaviours. Pays attention to nonverbal communication. ",
                            ]
                        ],
                        'Knowledge Sharing' => [
                            "metrics" => [
                                "IC2" => "Understands their team's domain , shares their knowledge frequently with their teammates and contributes to their team's documentation. Watches out for opportunities to share knowledge.",
                                "IC3" => "Facilitates discussions within their team, ensuring that everyone has an opportunity to share their opinion and be heard, and that discussion outcomes tie to stated goals. Encourages quiet participants and ensures no one person dominates the conversation.",
                                "IC4" => "Fosters a culture of documentation and knowledge sharing within their team and with their team's business stakeholders; actively demonstrates these behaviors.",
                            ]
                        ],
                        'Teamwork' => [
                            "metrics" => [
                                "IC2" => "Helps their teammates overcome obstacles, resolve blockers, and complete work tasks. Gives or shares credit where due.",
                                "IC3" => "Consistently helps their teammates overcome obstacles, resolve blockers, and complete work tasks. Gives or shares credit where due.",
                                "IC4" => "Consistently helps within their team to overcome obstacles, resolve blockers and dependencies, and complete work tasks. Gives or shares credit where due.",
                            ]
                        ],
                        'Relationship building' => [
                            "metrics" => [
                                "IC2" => "Works to build strong relationships with their teammates, manager, and product counterpart.",
                                "IC3" => "Works to build strong relationships with their teammates, manager, as well as their teams' relevant business stakeholders.",
                                "IC4" => "Works to build and improve strong relationships with their teammates, manager, and relevant business stakeholders for their team and senior engineers across the organization. Leverages relationships to better plan for and position their team.",
                            ]
                        ],
                        'Handling disagreement' => [
                            "metrics" => [
                                "IC2" => "Openly shares their opinions and contributes to discussions in a respectful manner. Approaches disagreement with their teammates non-defensively with inquisitiveness. Uses contradictory opinions as a basis for constructive, productive conversations. Is open to changing their perspective and plans based on others' input. ",
                                "IC3" => "Encourages their teammates to openly share their opinions and contribute to discussions in a respectful manner. Approaches disagreement non-defensively with inquisitiveness. Uses contradictory opinions as a basis for constructive, productive conversations. Is open to changing their perspective and plans based on others' input. ",
                                "IC4" => "Fosters a culture within their team where people are encouraged to share their opinions and contribute to discussions in a respectful manner, approach disagreement non-defensively with inquisitiveness, and use contradictory opinions as a basis for constructive, productive conversations. Is open to changing their perspective and plans based on others' input. ",
                            ]
                        ],
                    ],
                ],
                'Leadership' => [
                    "competencies" => [
                        'Decision making' => [
                            "metrics" => [
                                "IC2" => "Makes objective decisions and reflects on their own biases when making decisions. Aligns decision towards organizational goals. Holds themselves accountable for decision and outcomes. Disagrees and commits.",
                                "IC3" => "Takes ownership of decisions made in their team by helping their teammates to make clear decisions in alignment with organizational goals, backing decisions made, and taking responsibility for their success. Raises awareness for how biases impact decisions and ensures accountability is practiced within their team. Demonstrates these behaviours themselves.",
                                "IC4" => "Takes ownership of decisions made within their team by helping them make clear decisions in alignment with organizational goals, backing decisions made, and taking responsibility for their success. Raises awareness for how biases impact decisions and ensures accountability is practiced within their team. Demonstrates these behaviours themselves.",
                            ]
                        ],
                        'Driving alignment' => [
                            "metrics" => [
                                "IC2" => "Has conversations based on organizational strategy and principles with their teammates when appropriate. Strongly oriented towards goals and works towards their team's goals.",
                                "IC3" => "Has conversations based on organizational strategy and principles with their teammates to ensure team alignment. Strongly oriented towards goals and ensures their team is continuously working towards their shared goals.",
                                "IC4" => "Fosters a culture of having conversations based on organizational strategy and principles to create alignment within their team. Strongly oriented towards goals and ensures their team is continuously working towards their goals.",
                            ]
                        ],
                        'Facilitation' => [
                            "metrics" => [
                                "IC2" => "Facilitates discussions within their team, ensuring that everyone has an opportunity to share their opinion and be heard, and that discussion outcomes tie to stated goals.",
                                "IC3" => "Facilitates discussions within their team, ensuring that everyone has an opportunity to share their opinion and be heard, and that discussion outcomes tie to stated goals. Encourages quiet participants and ensures no one person dominates the conversation.",
                                "IC4" => "Facilitates discussions within their team, ensuring that everyone has an opportunity to share their opinion and be heard, and that discussion outcomes tie to stated goals. Ensures relevant parties are included in discussions. Guides discussions toward decisions, clarifies and gets buy-in.",
                            ]
                        ],
                        'Mentoring' => [
                            "metrics" => [
                                "IC2" => "Seeks out mentorship to grow their own experience. Mentors their teammates in an open, respectful, flexible, empathetic manner.",
                                "IC3" => "Mentors their teammates in an open, respectful, flexible, empathetic manner. Seeks out mentoring opportunities specifically to create team redundancy and backfill ability.",
                                "IC4" => "Mentors their teammates in an open, respectful, flexible, empathetic manner. Seeks out mentoring opportunities specifically to create team redundancy and backfill ability. Mentors members of other teams as needed. ",
                            ]
                        ],
                    ],
                ],
                'Strategic Impact' => [
                    "competencies" => [
                        'Business acumen' => [
                            "metrics" => [
                                "IC2" => "Has a good understanding of their team's domain, and how it contributes to overall business strategy. ",
                                "IC3" => "Has a thorough understanding of their team's domain, strategy and how it contributes to overall business strategy. Has understanding of adjacent teams' business domains.",
                                "IC4" => "Has a thorough understanding of their teams' domain, strategy, and how it maps to overall market trends. Has a thorough understanding of adjacent teams' strategies and how they map to their team and interaction points.",
                            ]
                        ],
                        'Strategic work' => [
                            "metrics" => [
                                "IC2" => "Understands the organization's engineering strategy. Involved in discussions about the implications for their team.",
                                "IC3" => "Understands the organization's engineering strategy. Collaborates on defining engineering work for their team. Consistently involved in discussions about the implications for their team. Contributes to team's strategy.",
                                "IC4" => "Collaborates and decides on engineering work within their team based on organization's engineering strategy, together with their teammates and senior engineers. Sometimes involved in work on organizational engineering strategy.",
                            ]
                        ],
                        'Product Thinking' => [
                            "metrics" => [
                                "IC2" => "Understands product area of focus as well as product discovery aspects, how it fits into the overall business, and sometimes makes improvement suggestions for it. Usually participates in opportunity selection sessions within their product team. Understands customer pain points and looks for opportunities to simplify product & technical design.",
                                "IC3" => "Thoroughly understands the business model in relation to their current product focus area as well as product discovery aspects. Regularly participates in opportunity selection sessions within their product team. Understand customer pain points and looks for opportunities to simplify product & technical design through customer feedback. Understands how tech decisions impact product areas.",
                                "IC4" => "Evaluates and creates new product features within their product team through active participation in discovery. Always participates in opportunity selection sessions within their product team. Understand customer pain points and simplifies product and technical design through proactive conversations with customers and elsewhere.",
                            ]
                        ],
                    ],
                ],
            ]
        ];
        foreach ($data["areas"] as $areaName => $areaData) {
            $area = Area::create([
                'name' => $areaName,
            ]);

            foreach ($areaData["competencies"] as $competencyName => $competencyData) {
                $competency = Competency::create([
                    'name' => $competencyName,
                    'area_id' => $area->id,
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
}
