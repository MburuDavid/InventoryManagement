import { Head } from '@inertiajs/react';
import Navbar from './Navbar';
import Dashboard from './Dashboard';
import Layout from '@/Components/Layout';
import { usePage } from '@inertiajs/react';


const Home = ({storeItems, lowStoreItems, units }) => {
    const message = usePage().props.flash.message;
   
    
    return (
       <Layout children={<Dashboard store={storeItems} lowStore={lowStoreItems} units={units} message={message}/> }/>
    )
}

export default Home;