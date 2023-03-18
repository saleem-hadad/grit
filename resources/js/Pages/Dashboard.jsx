import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

import Wrapper from '@/Components/Wrapper';

export default function Dashboard({auth, errors}) {
    return (
        <AuthenticatedLayout
            auth={auth}
            errors={errors}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto flex flex-wrap md:px-6">
                    🔎 Overview
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
