import { FaCircle, FaDotCircle } from 'react-icons/fa';

const CompetencyMetricBadge = ({ competency, metric, color = 'sky' }) => {
  return (
    <div className={`px-2 py-1 rounded-lg bg-${color}-100 space-x-1 text-xs flex items-center`}>
      <span>{competency}</span>
      <FaCircle className='h-1 w-1 text-blue-500'/>
      <span>{metric}</span>
    </div>
  );
};

export default CompetencyMetricBadge;
