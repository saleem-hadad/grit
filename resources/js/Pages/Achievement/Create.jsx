import { createAchievement } from '@/Api';
import { useState } from 'react';
import { FaPlus } from 'react-icons/fa';

export default function Create({ competencies }) {
    const [summary, setSummary] = useState('');
    const [date, setDate] = useState('');
    const [links, setLinks] = useState([{ label: '', url: '' }]);
    const [showSelectCompetencies, setShowSelectCompetencies] = useState(false);
    const [showSelectMetrics, setShowSelectMetrics] = useState(false);
    const [selectedCompetenciesIds, setSelectedCompetenciesIds] = useState([]);
    const [selectedMetricsIds, setSelectedMetricsIds] = useState([]);

    const handleSummaryChange = (e) => {
        setSummary(e.target.value);
    };

    const handleDateChange = (e) => {
        setDate(e.target.value);
    };

    const handleLabelChange = (index, e) => {
        const newLinks = [...links];
        newLinks[index].label = e.target.value;
        setLinks(newLinks);
    };

    const handleUrlChange = (index, e) => {
        const newLinks = [...links];
        newLinks[index].url = e.target.value;
        setLinks(newLinks);
    };

    const handleAddLink = () => {
        setLinks([...links, { label: '', url: '' }]);
    };

    const handleShowSelectCompetencies = () => {
        if(summary === '' || date === '') {
            return;
        }

        setShowSelectCompetencies(true);
    };

    const handleSelectCompetency = (id) => {
        if(selectedCompetenciesIds.includes(id)) {
            setSelectedCompetenciesIds(selectedCompetenciesIds.filter((competencyId) => competencyId !== id));
        } else {
            setSelectedCompetenciesIds([...selectedCompetenciesIds, id]);
        }
    }

    const handleSelectMetric = (id) => {
        if(selectedMetricsIds.includes(id)) {
            setSelectedMetricsIds(selectedMetricsIds.filter((metricId) => metricId !== id));
        } else {
            setSelectedMetricsIds([...selectedMetricsIds, id]);
        }
    }

    const handleShowSelectMetrics = () => {
        setShowSelectCompetencies(false);
        setShowSelectMetrics(true);
    };

    const handleSave = () => {
        if(selectedMetricsIds.length === 0) {
            return;
        }

        createAchievement(summary, date, links, selectedMetricsIds)
            .then(({data}) => {
                console.log(data);
            })
            .catch(console.error);

        setSummary('');
        setLinks([{ label: '', url: '' }]);
        setShowSelectCompetencies(false);
        setShowSelectMetrics(false);
        setSelectedCompetenciesIds([]);
        setSelectedMetricsIds([]);
    };

    return (
      <div className="bg-white shadow-xl border border-sky-500 sm:rounded-lg max-w-2xl left-0 right-0 mx-auto fixed -mb-96 hover:-mb-2 bottom-0 group transition-all">
        {!showSelectCompetencies && !showSelectMetrics && <div className="px-4 py-5 sm:p-6 space-y-4">
          <h3 className="text-base font-semibold leading-6 text-gray-900 text-center">Record an achievement</h3>
            <div className="w-full">
                <label className="block text-gray-700 font-bold mb-2" htmlFor="summary">
                Summary
                </label>
                <textarea
                className="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                id="summary"
                rows="3"
                value={summary}
                onChange={handleSummaryChange}
                />
            </div>
            
            <div className="w-full">
                <label className="block text-gray-700 font-bold mb-2" htmlFor="date">
                Date
                </label>
                <input
                className="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                id="date"
                type="date"
                value={date}
                onChange={handleDateChange}
                />
            </div>

            <div className="w-full">
                <label className="block text-gray-700 font-bold mb-2" >
                    Links
                    <button
                        className="bg-gray-500 ml-2 text-white font-bold p-1 py-2 rounded focus:outline-none focus:shadow-outline"
                        onClick={handleAddLink}>
                        <FaPlus className='h-2' />
                    </button>
                </label>
                <div className="flex flex-col items-center space-y-1">
                    {links.map((link, index) => (
                        <div key={index} className="flex w-full">
                        <input
                                className="appearance-none rounded-l  w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id={`label-${index}`}
                                type="text"
                                value={link.label}
                                onChange={(e) => handleLabelChange(index, e)}
                                placeholder="Label"
                            />
                            <input
                                className="appearance-none rounded-r w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id={`url-${index}`}
                                type="text"
                                value={link.url}
                                onChange={(e) => handleUrlChange(index, e)}
                                placeholder="https://example.com"
                            />
                        </div>
                    ))}
                    </div>
            </div>

            <div className='flex justify-end'>
                <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    onClick={handleShowSelectCompetencies}>
                    Next
                </button>
            </div>
        </div>}

        {showSelectCompetencies && !showSelectMetrics && <div className="px-4 py-5 sm:p-6 space-y-4">
          <h3 className="text-base font-semibold leading-6 text-gray-900 text-center">Select the corresponding competencies</h3>
            <div className="w-full p-2 bg-gray-50 border rounded">
                <p>{summary}</p>
            </div>

            <div className="w-full grid grid-cols-4 text-sm gap-2">
                {competencies.map((competency) => (
                    <div key={competency.id} className={selectedCompetenciesIds.includes(competency.id) ? 'border rounded p-1 border-blue-500 cursor-pointer' : 'border rounded p-1 cursor-pointer'} 
                        onClick={() => handleSelectCompetency(competency.id)}>
                        <p className="text-gray-700 font-bold" >
                            {competency.name}
                        </p>
                    </div>
                ))}
            </div>

            <div className='flex justify-end'>
                <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    onClick={handleShowSelectMetrics}>
                    Next
                </button>
            </div>
        </div>}

        {!showSelectCompetencies && showSelectMetrics && <div className="px-4 py-5 sm:p-6 space-y-4">
          <h3 className="text-base font-semibold leading-6 text-gray-900 text-center">Select the corresponding metrics</h3>
            <div className="w-full p-2 bg-gray-50 border rounded">
                <p>{summary}</p>
            </div>

            <div className="w-full text-sm space-y-2">
                {competencies.filter((competency) => selectedCompetenciesIds.includes(competency.id)).map((competency) => (
                    <div key={competency.id}>
                        <p className="text-gray-700 font-bold" >
                            {competency.name}
                        </p>
                        <div className="grid grid-cols-1 gap-2">
                            {competency.metrics.map((metric) => (
                                <div key={metric.id} className={selectedMetricsIds.includes(metric.id) ? 'border rounded p-1 border-blue-500 cursor-pointer' : 'border rounded p-1 cursor-pointer'}
                                    onClick={() => handleSelectMetric(metric.id)}>
                                    <p className="text-gray-700 font-bold text-xs" >
                                        {metric.name} - {metric.description}
                                    </p>
                                </div>
                            ))}
                        </div>
                    </div>
                ))}
            </div>

            <div className='flex justify-end'>
                <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    onClick={handleSave}>
                    Save
                </button>
            </div>
        </div>}
      </div>
    )
  }
  