import { FaGithub, FaLink, FaSlackHash } from 'react-icons/fa';

const AutoIconLink = ({ url, label }) => {
  const getIcon = () => {
    if (url.includes('github.com')) {
      return <FaGithub className="w-4 h-4 text-blue-600" />;
    } else if (url.includes('slack.com')) {
      return <FaSlackHash className="w-4 h-4 color text-red-500" />;
    }

    return <FaLink className="w-4 h-4 text-blue-500" />;
  };

  return (
    <a href={url} target="_blank" className='px-2 py-1 rounded-full border border-gray-200 space-x-1 text-xs flex items-center'>
      {getIcon()}
      <span>{label}</span>
    </a>
  );
};

export default AutoIconLink;
