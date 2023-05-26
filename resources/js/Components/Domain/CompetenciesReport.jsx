import React, { useEffect, useState } from 'react';

import { query } from '@/Api';
import Card from "../Card";
import LoadingView from "../LoadingView";
import AutoIconLink from './AutoIconLink';

export default function CompetenciesReport({name, graphql_query, ranges}) {
    const [data, setData] = useState(null);
    const [selectedRange, setSelectedRange] = useState(ranges ? ranges[0].key : null);

    useEffect(() => {
        setData(null);        

        async function fetchData() {
        
            let { data } = await query(graphql_query, selectedRange);
            let parsedData = JSON.parse(data[graphql_query]);
    
            setData(parsedData)
        }

        fetchData();
    }, [selectedRange])

    if(data === null) {
        return (
            <Card className="relative">
                <LoadingView  />
            </Card>
        )
    }

    return (
        <div className='bg-white shadow rounded-lg'>
            <div className="px-6 py-4">
                <div className="flex justify-between items-center mb-2">
                    <h3 className="mr-3 text-base text-gray-700 font-bold">{ name }</h3>

                    {ranges && <select className="ml-auto min-w-24 h-8 text-xs border-none appearance-none bg-gray-100 pl-2 pr-6 rounded active:outline-none active:shadow-outline focus:outline-none focus:shadow-outline"
                                       name="range"
                                       data={selectedRange}
                                       onChange={(e) => {setSelectedRange(e.target.data)}}>
                        {ranges.map(range => <option key={range.key} data={range.key}>{range.name}</option>)}
                    </select>}
                </div>

                <div className='space-y-2'>
                    {data.map((competency, index) => (
                        <div key={index} className='bg-slate-50 rounded p-4'>
                            <p key={competency.id} className="text-gray-700 font-bold mb-2">{competency.name}</p>
                            <div className='space-y-2'>
                                {competency.metrics.map((metric, index) => (
                                    <div key={index} className={metric.achievements.length > 0 ? 'border border-dashed bg-slate-100 rounded p-2' : 'border border-dashed bg-red-50 rounded p-2'}>
                                        <p key={metric.id} className="text-gray-500 px-2 font-bold">{metric.name}</p>
                                        {metric.achievements.length > 0 && <ul className='p-2'>
                                            {metric.achievements.map((achievement, index) => (
                                                <li key={index} className='pl-4 relative py-2 border'>
                                                    <div>
                                                        <p className="text-gray-500 px-2">Date: {achievement.date}</p>
                                                        <p key={'ach-' + index} className="text-gray-700 px-2">{achievement.summary}</p>
                                                        <div className='z-10 flex flex-col'>
                                                            {achievement.links.length > 0 && <p className="z-10 text-gray-500 px-2">Links:</p>}
                                                            {achievement.links.map((link, index) => (<AutoIconLink key={'link' + index} url={link.url} label={link.url} />))}
                                                        </div>
                                                        <p>-----</p>
                                                    </div>
                                                </li>
                                            ))}
                                        </ul>
                                        }
                                    </div>
                                ))}
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    );
};
