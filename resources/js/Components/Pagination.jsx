import { Link } from "@inertiajs/react"

export default function Pagination({ links }) {
    return (
        <div className='flex item-center gap-1'>
            {links.map((link, index) => (
                <Link key={index} href={link.url || ''} className={"text-sm p-1 px-3 rounded border " +(link.active ? " bg-gray-950 text-white ": " ") +(!link.url? " !text-gray-500 cursor-not-allowed ": " hover:bg-gray-950 hover:text-white  ")}>
                    <div
                        dangerouslySetInnerHTML={{ __html: link.label }}
                    />
                </Link>
            ))}

        </div>
    )
}