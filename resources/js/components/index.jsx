import { useLoadScript } from "@react-google-maps/api";
import Map  from "../components/Map/Map"

export default function MapLoad(){
    const { isLoaded } = useLoadScript({
            googleMapsApiKey: import.meta.env.VITE_PUBLIC_GOOGLE_MAPS_API_KEY
        }

    );
    if(!isLoaded) return <div>...Loading</div>
    return(
        <div>
            <Map/>
        </div>
    )
}
