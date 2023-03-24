import { FaCircle } from 'react-icons/fa';

const CompetencyMetricBadge = ({ competency, metric, color = 'bg-sky-100' }) => {
  return (
    <div className={`px-2 py-1 rounded-lg ${color} space-x-1 text-xs flex items-center`}>
      <span>{competency}</span>
      <FaCircle className='h-1 w-1 text-blue-500'/>
      <span>{metric}</span>
    </div>
  );
};

export default CompetencyMetricBadge;
