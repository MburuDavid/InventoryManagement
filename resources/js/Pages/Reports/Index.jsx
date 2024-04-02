import Layout from "@/Components/Layout";
import { Head } from '@inertiajs/react';

const Index = () => {
    return (
        <div>
            <Head title='Reports'/>
            <Layout children={<h1 className="mt-10">Reports</h1>}/>
        </div>
    )
}

export default Index;