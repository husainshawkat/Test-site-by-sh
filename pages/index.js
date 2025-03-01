import Head from 'next/head';

export default function Home() {
  return (
    <div className="min-h-screen bg-gray-900 text-white flex flex-col items-center justify-center">
      <Head>
        <title>Husain Photography</title>
      </Head>
      <h1 className="text-4xl font-bold">Welcome to Husain's Photography Portfolio</h1>
      <p className="mt-4 text-lg">Capturing moments that tell stories.</p>
    </div>
  );
}
