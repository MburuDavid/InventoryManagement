import { Head } from '@inertiajs/react';
import Dashboard from './Dashboard';
import Layout from '@/Components/Layout';
import { usePage } from '@inertiajs/react';


const Home = ({ assets, categories, assetQuantiesByCategory, lowAssets, subCategories }) => {
    const message = usePage().props.flash.message;     
    return (
       <>
           <Head title='Home'/>
           <Layout children={<Dashboard store={assets} chartData={assetQuantiesByCategory} categories={categories} subCategoryOptions={subCategories} message={message} lowStore={lowAssets}/> }/>
       </>
    )
}

export default Home;