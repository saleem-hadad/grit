import { gql } from '@urql/core';
import client from './client.js';

export const getAllCompetencies = () => {
    return client
    .query(gql`
        query {
            competencies {
                name
                metrics {
                    id
                    name
                    description
                }
            }
        }
    `)
    .toPromise();
}
