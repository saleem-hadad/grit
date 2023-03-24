import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

import Wrapper from '@/Components/Wrapper';
import { renderComponent } from '@/Components';
import NoContent from '@/Components/NoContent';

export default function Dashboard({auth, errors, metrics, hasData}) {
    return (
        <AuthenticatedLayout
            auth={auth}
            errors={errors}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto flex flex-wrap md:px-6">
                    {! hasData && <NoContent body="No enough data to show reports 🧐" />}

                    {hasData && metrics.map( (metric, index) => {
                        return <Wrapper
                            key={index}
                            width={metric.width}
                            children={renderComponent(metric.component, metric)}
                        />
                    })}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
