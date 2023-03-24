import React, { useEffect, useState } from 'react';
import { Head } from '@inertiajs/react';

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import LoadMore from '@/Components/LoadMore';
import { getAchievements, getAllCompetencies } from '@/Api';
import AutoIconLink from '@/Components/Domain/AutoIconLink';
import CompetencyMetricBadge from '@/Components/Domain/CompetencyMetricBadge';
import Create from './Create';

export default function Index({auth}) {
    const [achievements, setAchievements] = useState([]);
    const [competencies, setCompetencies] = useState([]);
    const [currentPage, setCurrentPage] = useState(1);
    const [hasMorePages, setHasMorePages] = useState(true);
    const [loading, setLoading] = useState(false);

    useEffect(() => {
        if(! hasMorePages) return;
        setLoading(true);

        getAchievements(currentPage)
            .then(({data}) => {
                setAchievements([...achievements, ...data.achievements.data])
                setHasMorePages(data.achievements.paginatorInfo.hasMorePages)
                setLoading(false);
            })
            .catch(console.error);
    }, [currentPage]);

    useEffect(() => {
        getAllCompetencies()
            .then(({data}) => {
                setCompetencies(data.competencies)
            })
            .catch(console.error);
    }, []);

    return (
        <AuthenticatedLayout auth={auth}>
            <Head title="Achievements" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="flex flex-col">
                        {achievements.length > 0 && <div className="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div className="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div className="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table className="min-w-full divide-y divide-gray-200">
                                        <thead className="bg-gray-50">
                                        <tr>
                                            <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date
                                            </th>
                                            <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Summary
                                            </th>
                                            <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Links
                                            </th>
                                            <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Competency
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody className="bg-white divide-y divide-gray-200">
                                        {achievements.map((item) => (
                                            <tr key={item.id} className='loaded' id={'item-' + item.id}>
                                                <td className="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">{item.date}</td>
                                                <td className="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">{item.summary}</td>
                                                <td className="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">
                                                    <div className='flex space-x-1'>
                                                        {item.links.map((link) => (
                                                                <AutoIconLink key={link.url} url={link.url} label={link.label} />
                                                            ))}
                                                    </div>
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">
                                                    <div className='flex space-x-1'>
                                                        {item.metrics.map((metric, index) => (
                                                                <CompetencyMetricBadge key={index} competency={metric.competency.name} metric={metric.name} />
                                                            ))}
                                                    </div>
                                                </td>
                                            </tr>
                                        ))}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>}

                        <LoadMore hasContent={achievements.length > 0} hasMorePages={hasMorePages} loading={loading} onClick={() => setCurrentPage(currentPage+1)} />
                    </div>

                    <Create competencies={competencies} />
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
